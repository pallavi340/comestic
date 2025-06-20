<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function addTobag(Request $req, $pro_slug){
      $product = Product::where('slug', $pro_slug)->first();

      if (!$product) {
          abort(404);
      }
      else{
         $exist_order = Order::where(
          [
            ['user_id', Auth::id()],
            ['isOrdered', false],
          ])->first();

           if($exist_order){
                $exist_order_item = OrderItems::where(
                  [
                    ['order_id', $exist_order->id],
                    ['product_id', $product->id],
                    ['isOrdered', false],
                    ['user_id ', Auth::id()],
                  ])->first();

                if ($exist_order_item) {
                  $exist_order_item->qty += 1;
                  $exist_order_item->save();
                } 
                
                else {
                  $order_item = new OrderItems();
                  $order_item->user_id = Auth::id();
                  $order_item->order_id = $exist_order->id;
                  $order_item->product_id = $product->id;
                  $order_item->save();
                }
           }

        else{
           $order = new Order();
           $order->user_id = Auth::id();
           $order->save();

           $order_item = new OrderItems();
            $order_item->order_id = $order->id;
            $order_item->user_id = Auth::id();
            $order_item->product_id = $product->id;
            $order_item->save();
         }
      }

      return redirect()->route('bag');
    }

    public function showBag(){
      $data['Order'] = Order::where('user_id', Auth::id()) ->where('isOrdered', false)->first();
       return view('base.bag', compact("data"));
    }
}
