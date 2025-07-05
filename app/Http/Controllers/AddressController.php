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
      return redirect()->back()->with('success', 'Address saved successfully!');
   }

   
   public function addAddress(Request $req){
    $order = Order::where('user_id', Auth::id())->where('isOrdered', false)->first(); 
    if($order){
        $order->address_id = $req->selected_address;
        $order->save();
        return view('base.payment');

    }
}

public function updateAddress(Request $request)
{
    $request->validate([
        'area' => 'required|string',
        'street' => 'required|string',
        'city' => 'required|string',
        'state' => 'required|string',
        'pincode' => 'required|string',
    ]);

    $user = auth()->user();

    $user->area = $request->area;
    $user->street = $request->street;
    $user->city = $request->city;
    $user->state = $request->state;
    $user->pincode = $request->pincode;
    $user->save();

    return back()->with('success', 'Address saved successfully.');
}

}
