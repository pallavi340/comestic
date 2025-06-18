<?php

namespace App\Http\Controllers;

use App\Models\Category; 
use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return  view("admin.manageProducts")->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('parent_id', null)->get();
        return view("admin.InsertProduct")->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $data = $request ->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'discount_price' => 'required|numeric',
            'brand' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'discount_price' => 'nullable|numeric',
         ]);

          $data["image"] = $request->file("image")->store("product_image", "public");
    

          Product::create($data);
          return redirect()->route('products.index')->with('success', "Product created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}