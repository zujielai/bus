<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use DB;
use Auth;
use App\Models\myCart;
use App\Models\myOrder;
use App\Models\Schedule;
use App\Models\Tng;
use Session;
use Notification;

class TngController extends Controller
{
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

        $addTng=Tng::create([
            'time'=>$r->time,
            'date'=>$r->date,
            'from'=>$r->from,
            'to'=>$r->to,
            'busNo'=>$r->busNo,
            'driver'=>$r->driver,
            'image'=>$imageName,
            'userID'=>Auth::id(),
            'amount'=>$r->sub,
            
        ]);
        $tngID=DB::table('tngs')->where('userID','=',Auth::id())->orderBy('created_at','desc')->first();

        return back();
    }

    public function showOrder3(){
        $tngs=DB::table('tngs')
        ->select('tngs.id','tngs.amount','tngs.created_at','tngs.time','tngs.date','tngs.from','tngs.to','tngs.busNo','tngs.driver')
        ->where('tngs.userID','=',Auth::id())
        ->get();

        return view('myTrip2')->with('tngs',$tngs);
    }

    public function showOrder4(){
        $tngs=DB::table('tngs')
        ->select('tngs.id','tngs.amount','tngs.created_at','tngs.time','tngs.date','tngs.from','tngs.to','tngs.busNo','tngs.driver','tngs.image') 
        ->get();

        return view('checkBusTicketRecord2')->with('tngs',$tngs);
    }

    public function delete($id){
        $deleteMyTng=Tng::find($id);
        $deleteMyTng->delete();
        return redirect()->route('checkBusTicketRecord2');
    }

}
