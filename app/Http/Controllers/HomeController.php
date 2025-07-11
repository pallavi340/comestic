<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Blog;
use App\Models\Category;  
use Auth;  

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(20)->get();
        return view('base.home', compact('products'));
    } 
   

    public function productView(Request $req, $slug){
      $pro = Product::where('slug', $slug)->first();
      return view('base.productView', compact('pro'));
    }
  


    public function search(Request $req)
{
    $search = $req->search;

    $products = Product::where('title', 'like', "%$search%")
        ->orWhereHas('category', function ($q) use ($search) {
            $q->where('cat_title', 'like', "%$search%");
        })
        ->paginate(50);

    $categories = Category::whereNull('parent_id')->get();

    return view("base.home", compact('products', 'categories'));
}

    
    public function categories(){
        $categories = Category::whereNull('parent_id')->get();
        $products = Product::latest()->take(12)->get();
        return view("base.categories", compact('categories', 'products'));
    }
    public function filter(Request $request)
{
    $query = Product::query();
    if ($request->has('category')) {
        $query->whereIn('category', $request->category);
    }

     if ($request->has('brand')) {
        $query->whereIn('brand', $request->brand);
    }

  
    if ($request->has('price')) {
        $query->where(function ($q) use ($request) {
            foreach ($request->price as $price) {
                if ($price == 'under500') {
                    $q->orWhere('price', '<', 500);
                }
                if ($price == '500to1000') {
                    $q->orWhereBetween('price', [500, 1000]);
                }
                if ($price == '1000to2000') {
                    $q->orWhereBetween('price', [1000, 2000]);
                }
                if ($price == 'above2000') {
                    $q->orWhere('price', '>', 2000);
                }
            }
        });
    }

  
    if ($request->has('discount')) {
        $query->where(function ($q) use ($request) {
            foreach ($request->discount as $discount) {
                $q->orWhere('discount', '>=', (int)$discount);
            }
        });
    }
  
    $products = $query->paginate(9);

    return view('base.categories', compact('products'));
}

   public function brand(){
    return view("base.brand");  
   }

   public function order(){
    $orders = Order::with('orderItems.product')->where('user_id', Auth::id())->latest()->get();
    return view("base.order", compact('orders'));
   }

    public function blog(){
    $blogs = Blog::latest()->get();
     return view("base.blog", compact('blogs'));
    }
   public function offer(){
    return view('base.offer');
   }
   public function profile(){
    return view('base.profile');
   }

    public function blog(){
    $blogs = Blog::latest()->get();
     return view("base.blog", compact('blogs'));
   }
   public function advice(){
    return view("base.advice");
   }
   public function offer(){
    return view('base.offer');
   }
   public function profile(){
    return view('base.profile');
   }
}