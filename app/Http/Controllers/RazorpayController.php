<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;

class RazorpayController extends Controller
{
    public function showForm()
    {
        return view('base.payment');
    }

    public function payment(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($request->input('razorpay_payment_id'));

        if ($payment->capture(['amount' => $payment['amount']])) {
       
            return redirect()->route('razorpay.form')->with('success', 'Payment successful!');
        } else {
            return redirect()->route('razorpay.form')->with('error', 'Payment failed.');
        }
    }
}
   

