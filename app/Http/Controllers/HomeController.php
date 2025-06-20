<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;  

class HomeController extends Controller
{
    public function home()
    {
     return view("base.home");
    } 

     public function viewProduct($id){
       $pro = Product::find($id);
     return view("base.productView", compact("pro"));
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
    
}

