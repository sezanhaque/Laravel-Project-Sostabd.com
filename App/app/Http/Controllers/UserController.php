<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
    	return view('User.index');
    }

    public function PendingOrder(Request $request)
    {
    	$user = session()->get('user');
        $orders=DB::table('orders')
        ->where('delivery_status','pending')
        ->where('customer_id',$user->id)
        ->get();
        $request->session()->put('orders',$orders);
        return view('User.pendingOrder');
    }

    public function DeliveredOrder(Request $request)
    {
    	$user = session()->get('user');
        $orders=DB::table('orders')
        ->where('delivery_status','delivered')
        ->where('customer_id',$user->id)
        ->get();
        $request->session()->put('orders',$orders);
        return view('User.pendingOrder');
    }
}
