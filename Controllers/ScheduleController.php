<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');        
    }

    public function add(){
        $r=request();
        if($r->file('image')!=''){
        
        $image=$r->file('image');
        $image->move('images',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();//get uploaded image file name
        }
        else{
            $imageName="empty.jpg";//default image
        }

        $addSchedule=Schedule::create([
            'time'=>$r->catTime,
            'date'=>$r->catDate,
            'from'=>$r->catFrom,
            'to'=>$r->catTo,
            'busNo'=>$r->catBusNo,
            'driver'=>$r->catDriver,
            'type'=>$r->catType,
            'endTime'=>$r->catEndTime,
            'duration'=>$r->catDuration,
            'price'=>$r->catPrice,
            'image'=>$imageName,
        ]);
        return view('addSchedule'); 
    }

    public function view(){
        $viewAll=Schedule::all();
        return view('busTicket')->with('schedules',$viewAll);
    }

    public function view2(){
        $viewAll=Schedule::all();
        return view('cancelSchedule')->with('schedules',$viewAll);
    }


    public function delete($id){
        $deleteSchedule=Schedule::find($id);
        $deleteSchedule->delete();
        return redirect()->route('cancelSchedule');
    }

    public function edit($id){
        $schedule=Schedule::all()->where('id',$id);
        return view('editSchedule')->with('schedules',$schedule);
    }

     public function update(){
        $r=request();
        $schedule=Schedule::find($r->catID);
        $schedule->time=$r->catTime;
        $schedule->date=$r->catDate;
        $schedule->from=$r->catFrom;
        $schedule->to=$r->catTo;
        $schedule->busNo=$r->catBusNo;
        $schedule->driver=$r->catDriver;
        $schedule->type=$r->catType;
        $schedule->endTime=$r->catEndTime;
        $schedule->duration=$r->catDuration;
        $schedule->price=$r->catPrice;
        $schedule->save();
        return redirect()->route('cancelSchedule');
    }

    public function showDetail($id){
        $viewAll=Schedule::all()->where('id',$id);
        return view('scheduleDetail')->with('schedules',$viewAll);
    }

    public function showCart($id){
        $viewAll=Schedule::all()->where('id',$id);
        return view('myCart')->with('schedules',$viewAll);
    }

    public function showCart2($id){
        $viewAll=Schedule::all()->where('id',$id);
        return view('myCart2')->with('schedules',$viewAll);
}
 
    public function searchSchedule(){
        $r=request();
        $keyword=$r->keyword;
        $keyword2=$r->keyword2;
        $keyword3=$r->keyword3;
        $schedule=DB::table('schedules')->where('from','like','%'.$keyword.'%')->where('to','like','%'.$keyword2.'%')->where('date','like','%'.$keyword3.'%')->get();
        return view('busTicket')->with('schedules',$schedule);
    }


}
