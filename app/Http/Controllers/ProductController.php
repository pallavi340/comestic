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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
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
    public function edit()
    {
      //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product)
    {
     //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

public function pagenate()
{
    $products = Product::latest()->paginate(9); // ✅ show 9 products per page
    return view('products.index', compact('products'));
}

public function filterByCategory($slug)
{
   $products = Product::where('category_slug', $slug)->latest()->paginate(9);


    return view('products.filtered', compact('products', 'category'));
}





// In your ProductController.php or similar

public function filter(Request $request)
{
    $products = Product::query();
    
    // Apply filters if they exist
    if ($request->has('brand') && is_array($request->brand)) {
        $products->whereIn('brand', $request->brand);
    }
    
    // Price range filtering
    if ($request->has('price')) {
        foreach ($request->price as $priceRange) {
            switch ($priceRange) {
                case 'under500':
                    $products->orWhere('price', '<', 500);
                    break;
                case '500to1000':
                    $products->orWhereBetween('price', [500, 1000]);
                    break;
                case '1000to2000':
                    $products->orWhereBetween('price', [1000, 2000]);
                    break;
                case 'above2000':
                    $products->orWhere('price', '>', 2000);
                    break;
            }
        }
    }
    
    // Discount filtering
    if ($request->has('discount') && is_array($request->discount)) {
        $products->where(function($query) use ($request) {
            foreach ($request->discount as $discount) {
                $query->orWhere('discount_price', '>=', $discount);
            }
        });
    }
    
    // Sorting logic
    if ($request->has('sort')) {
        switch ($request->sort) {
            case 'price_low_high':
                $products->orderBy('price', 'asc');
                break;
            case 'price_high_low':
                $products->orderBy('price', 'desc');
                break;
            case 'discount_high_low':
                $products->orderBy('discount_price', 'desc');
                break;
            case 'newest_first':
                $products->orderBy('created_at', 'desc');
                break;
            case 'rating':
                $products->orderBy('average_rating', 'desc');
                break;
            default:
                // Recommended (default sorting)
                $products->orderBy('created_at', 'desc');
        }
    } else {
        // Default sorting
        $products->orderBy('created_at', 'desc');
    }
    
    $products = $products->paginate(12);
    
   return view('products.index', compact('products'));
}


}