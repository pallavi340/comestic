<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class AdminController extends Controller
{
 
   public function dashboard()
   {
     return view('admin.dashboard');
   }

   public function manageOrder(){
    return view('admin.manageOrder');
   }

public function handle($request, Closure $next)
{
    if (auth()->check() && auth()->user()->is_admin) {
        return $next($request);
    }

    abort(403, 'Unauthorized');
}

}

   


