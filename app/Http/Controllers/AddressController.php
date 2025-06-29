<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Address;
use Illuminate\Support\Facades\Auth; 


class AddressController extends Controller
{
     public function store(Request $request)
    {
      $validateData = $request->validate([
          'full_name' => 'required|string|max:255',
          'contact' => 'required|string|max:255',
          'area' => 'required|string|max:255',
          'street' => 'required|string|max:255',
          'city' => 'required|string|max:255',
          'state' =>'required|string|max:255',
          'pincode' =>'required|string|max:255',
      ]);

       $validateData['user_id'] = Auth::id();
      Address::create($validateData);
      return view("base.checkout");
   }

   
   public function addAddress(Request $req){
    $order = Order::where('user_id', Auth::id())->where('isOrdered', false)->first(); 
    if($order){
        $order->address_id = $req->selected_address;
        $order->save();
        return redirect()->route('base.payment');
    }
}
}
