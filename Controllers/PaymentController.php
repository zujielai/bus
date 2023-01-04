<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use DB;
use Auth;
use App\Models\myCart;
use App\Models\myOrder;
use App\Models\Schedule;
use Session;
use Notification;

class PaymentController extends Controller
{
    public function paymentPost(Request $request)
    {
	       
	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            'time'=>$request->catTime,
                "amount" => $request->sub*100,
                "currency" => "MYR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of southern online",
        ]);

        $newOrder=myOrder::Create([     
            'time'=>$request->time,
            'date'=>$request->date,
            'from'=>$request->from,
            'to'=>$request->to,
            'busNo'=>$request->busNo,
            'driver'=>$request->driver,
            'paymentStatus'=>'Done',
            'userID'=>Auth::id(),
            'amount'=>$request->sub,
        ]); 
        
        $orderID=DB::table('my_orders')->where('userID','=',Auth::id())->orderBy('created_at','desc')->first();

        return back();
    }
    
    public function showOrder(){
        $orders=DB::table('my_orders')
        ->select('my_orders.id','my_orders.amount','my_orders.created_at','my_orders.time','my_orders.date','my_orders.from','my_orders.to','my_orders.busNo','my_orders.driver')
        ->where('my_orders.userID','=',Auth::id())
        ->get();

        return view('myTrip')->with('orders',$orders);
    }

    public function showOrder2(){
        $orders=DB::table('my_orders')
        ->select('my_orders.id','my_orders.amount','my_orders.created_at','my_orders.time','my_orders.date','my_orders.from','my_orders.to','my_orders.busNo','my_orders.driver') 
        ->get();

        return view('checkBusTicketRecord')->with('orders',$orders);
    }

    public function delete($id){
        $deleteMyOrder=myOrder::find($id);
        $deleteMyOrder->delete();
        return redirect()->route('checkBusTicketRecord');
    }
}