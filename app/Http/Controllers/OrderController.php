<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function cart()
   {
       $order = Order::with('items')->where("user_id", Auth::id())->where("isOrdered", false)->first();

    if (!$order) {
       $order = new Order();
        $order->items = collect(); 
    }

    return view('base.cart', compact("order"));
  }




  public function addtoCart(Request $request, $slug)
{
  $userId = Auth::id();
    $product = Product::where('slug', $slug)->firstOrFail();

    $order = Order::firstOrCreate(
      ['user_id' => $userId, 'isOrdered' => false]
    );

    $existingOrderItem = OrderItems::where('order_id', $order->id) ->where('product_id', $product->id)->where('user_id', $userId)->where('isOrdered', false)->first();

  if($existingOrderItem) {
       $existingOrderItem->qty += 1;
        $existingOrderItem->save();
      } 
    else
     {
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

  public function showCart()
{
    $order = Order::where('user_id', Auth::id()) ->where('isOrdered', false)->first();

    $orderItems = [];

    if ($order) {
        $orderItems = OrderItems::where('order_id', $order->id) ->where('isOrdered', false) ->with('product_id')->get();
    }

    return view('base.cart', compact('order', 'orderItems')); 
}


}
