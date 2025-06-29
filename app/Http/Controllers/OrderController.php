<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Coupon;
use App\Models\User;
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

    return redirect()->route('base.cart');
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

public function updateCart(Request $request, $id)
{
    $order = Order::where("user_id", Auth::id())->where("isOrdered", false)->first();

    if (!$order) {
        return redirect()->back()->with("error", "Cart not found.");
    }

    $item = $order->items()->where("id", $id)->first();

    if (!$item) {
        return redirect()->back()->with("error", "Item not found.");
    }

    if ($request->action === 'increase') {
        $item->qty += 1;
    } elseif ($request->action === 'decrease' && $item->qty > 1) {
        $item->qty -= 1;
    }

    $item->save();

    return redirect()->back()->with("success", "Cart updated.");
}

 public function addcoupon(Request $request){
    $coupon_code  = $request->coupon_code;
    $coupon = Coupon::where('code', $coupon_code)->first();

    if($coupon){
        $order = Order::where('user_id', Auth::id())->where('isOrdered', false)->first();
        
        if ($order) {
            $order->coupon_id = $coupon->id; 
            $order->save();
        }
    } else {
        return redirect()->route('base.cart')->with('coupon_error', 'Coupon code not found..');
    }

    return redirect()->route('base.cart');
}

public function removeCoupon(Request $request)
{
    $orderId = $request->input('order_id');
    $order = Order::find($orderId);

    if ($order && $order->coupon_id) {
        $order->coupon_id = null;
        $order->save();

        return redirect()->back()->with('success', 'Coupon removed.');
    }

    return redirect()->back()->with('error', 'Invalid order or no coupon.');
}


 public function checkout()
{
    $data['addresses'] = User::find(Auth::id())->addresses;
    $data['order'] = Order::where('user_id', Auth::id())->where('isOrdered', false)->first(); 
    return view('base.checkout', $data);
}



public function success()
{
    return view('order.success');
}

public function myorder()
{
    $orders = Order::where('user_id', Auth::id()) ->with('orderItems.product')->get();
    return view('order.myorder', compact('orders'));
}

}
