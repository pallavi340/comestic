<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
   public function index()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->with('product')->get();
        return view('base.wishlist', compact('wishlist'));
    }
    
    public function store($productId)
    {
        $exists = Wishlist::where('user_id', Auth::id())->where('product_id', $productId)->exists();

        if (!$exists) {
            Wishlist::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
            ]);
        }

        return redirect()->route('base.wishlist')->with('msg','success', 'Added to wishlist');
    }

    public function destroy($id)
    {
        Wishlist::where('user_id', Auth::id())->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Removed from wishlist');
    }

    public function show($id)
{
    $item = Wishlist::where('user_id', Auth::id())->where('id', $id)->with('product')->firstOrFail();
    return view('wishlist.show', compact('item'));
}

}

