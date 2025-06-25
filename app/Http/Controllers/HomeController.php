<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;  
use Auth;  

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(12)->get();
        return view('base.home', compact('products'));
    } 
    public function cart()
    {
      $order = Order::where("user_id", Auth::id())->first();
        return view('base.cart', compact("order"));
    } 

    public function productView(Request $req, $slug){
      $pro = Product::where('slug', $slug)->first();
      return view('base.productView', compact('pro'));
    }
    
 public function filter($cat_id){
        $products = Product::where('category_id', "$cat_id")->paginate(50);
        $categories = Category::where('category_id')->get();
       return view("base.home", compact('products', 'categories'));
    }

     public function search(Request $req){
        $search = $req->search;
        $products = Product::where('title','like', "%$search%")->paginate(50);
        $categories = Category::whereNull('category_id')->get();
       return view("home", compact('products', 'categories'));
    }
    
    public function categories(){
      return view("base.categories");
    }
    public function offer(){
      return view("base.offer");
    }

   public function profile(){
    return view("base.profile");  
   }
   public function wishlist(){
    return view("base.wishlist");  
   }  

}