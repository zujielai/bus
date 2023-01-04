<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');        
    }
    
    public function add(){
        $r=request();
        $addUser=User::create([
            'name'=>$r->name,
            'email'=>$r->email,
            'phoneNo'=>$r->phoneNo,
            'address'=>$r->address,
            'nationality'=>$r->nationality,
            
        ]);
        $userID=DB::table('users')->where('id','=',Auth::id())->orderBy('created_at','desc')->first();

        return back();
    }
    public function view(){
        $users=DB::table('users')
        ->select('users.name','users.email','users.phoneNo','users.address','users.nationality')
        ->where('users.id','=',Auth::id())
        ->get();

        return view('userProfile')->with('users',$users);
    }


}
