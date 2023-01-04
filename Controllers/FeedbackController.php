<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Feedback;
use App\Models\QR;

class FeedbackController extends Controller
{
    public function add(){
        $r=request();
        $addFeedback=Feedback::create([
            'name'=>$r->name,
            'phoneNo'=>$r->phoneNo,
            'email'=>$r->email,
            'enquiry'=>$r->enquiry,
        ]);
        return view('contact'); 
    }

    public function view(){
        $viewAll=Feedback::all();
        return view('feedback')->with('feedback',$viewAll);
    }

    public function add2(){
        $r=request();
        if($r->file('image')!=''){
        
        $image=$r->file('image');
        $image->move('images',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();
        }
        else{
            $imageName="empty.jpg";
        }

        $addQr=Qr::create([
            'image'=>$imageName,
        ]);
        return view('addQr'); 
    }

    public function view2(){
        $viewAll=Qr::all();
        return view('setting')->with('q_r_s',$viewAll);
    }

    public function edit($id){
        $qr=Qr::all()->where('id',$id);
        return view('setting')->with('q_r_s',$qr);
    }

    public function update(){
        $r=request();
        if($r->file('image')!=''){
        
            $image=$r->file('image');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            }
            else{
                $imageName="empty.jpg";
            }
         
        $qr=Qr::find($r->catID);
        $qr->image=$r->imageName;
        $qr->save();
        return redirect()->route('setting');
    }
}
