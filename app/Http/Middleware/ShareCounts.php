<?php
use Closure;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Wishlist;

class ShareCounts
{
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()) {
            session([
                'cart_count' => Cart::where('user_id', auth()->id())->count(),
                'wishlist_count' => Wishlist::where('user_id', auth()->id())->count(),
            ]);
        }

        return $next($request);
    }
}
