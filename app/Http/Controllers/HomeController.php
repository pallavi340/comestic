<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
     
}
