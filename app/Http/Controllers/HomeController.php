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
   

    public function productView(Request $req, $slug){
      $pro = Product::where('slug', $slug)->first();
      return view('base.productView', compact('pro'));
    }
  

     public function search(Request $req){
        $search = $req->search;
        $products = Product::where('title','like', "%$search%")->paginate(50);
        $categories = Category::whereNull('category_id')->get();
       return view("home", compact('products', 'categories'));
    }
    
    public function categories(){
        $categories = Category::whereNull('parent_id')->get();
        $products = Product::latest()->take(12)->get();
        return view("base.categories", compact('categories', 'products'));
    }
    public function filter(Request $request)
{
    $query = Product::query();

    // ✅ Category Filter
    if ($request->has('category')) {
        $query->whereIn('category', $request->category);
    }

     if ($request->has('brand')) {
        $query->whereIn('brand', $request->brand);
    }

    // ✅ Price Filter
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

    // ✅ Discount Filter
    if ($request->has('discount')) {
        $query->where(function ($q) use ($request) {
            foreach ($request->discount as $discount) {
                $q->orWhere('discount', '>=', (int)$discount);
            }
        });
    }

    // You can add brand/category filters similarly here if needed

    // ✅ Paginate
    $products = $query->paginate(9);

    return view('base.categories', compact('products'));
}

   public function brand(){
    return view("base.brand");  
   }
   public function order(){
    return view("base.order");
   }
   public function blog(){
    return view("base.blog");
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