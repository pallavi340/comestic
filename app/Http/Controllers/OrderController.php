<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
  public function addToCart(Request $request, $product_slug)
{
    $product = Product::where('slug', $product_slug)->firstOrFail();
    $userId = Auth::id();

    $order = Order::firstOrCreate(
        ['user_id' => $userId, 'isOrdered' => false]
    );

    $existingOrderItem = OrderItems::where('order_id', $order->id)
        ->where('product_id', $product->id)
        ->where('user_id', $userId)
        ->where('isOrdered', false)
        ->first();

    if ($existingOrderItem) {
        $existingOrderItem->qty += 1;
        $existingOrderItem->save();
    } else {
        OrderItems::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'user_id' => $userId,
            'qty' => 1,
            'isOrdered' => false
        ]);
    }

    return redirect()->back()->with('success', 'Product added to cart!');
}




  //public function showCart()
//{
  //  $order = Order::where('user_id', Auth::id())
    //              ->where('isOrdered', false)
      //            ->first();

    //$orderItems = [];

    //if ($order) {
      //  $orderItems = OrderItems::where('order_id', $order->id) ->where('isOrdered', false) ->with('product_id')->get();
    //}

    //return view('base.cart', compact('order', 'orderItems')); 
//}


}
