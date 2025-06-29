<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function placeOrder(Request $request)
{
    if ($request->payment_method === 'razorpay' && $request->has('razorpay_payment_id')) {
        Order::create([
            'user_id' => Auth::id(),
            'payment_mode' => 'Online',
            'payment_id' => $request->razorpay_payment_id,
            'isOrdered' => true,
            'total' => 500, 
        ]);
    } else {
        Order::create([
            'user_id' => Auth::id(),
            'payment_mode' => 'COD',
            'isOrdered' => true,
            'total' => 500,
        ]);
    }

    return redirect()->route('order.success');
}

public function Payment(){
  $order = Order::where('user_id', Auth::id())->where('isOrdered', false)->first(); 
   if(!$order->address_id){
     return redirect()->route('base.checkout')->with('address_error', 'Please select an address..');
    }

    return view('base.payment', compact('order'));
}


public function createRazorpayOrder(Request $request)
{
    $api = new \Razorpay\Api\Api(config('services.razorpay.key'), config('services.razorpay.secret'));

    $order = $api->order->create([
        'receipt' => uniqid(),
        'amount' => $request->amount,
        'currency' => 'INR',
        'payment_capture' => 1
    ]);

    return response()->json([
        'order_id' => $order['id'],
        'amount' => $request->amount
    ]);
}


}
