<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
 
   public function dashboard()
   {
     return view('admin.dashboard');
   }

   public function manageOrder(){
    $orders = Order::with('user' )->latest()->get();
    return view('admin.manageOrders', compact('orders'));
   }
  
public function viewOrder($id)
{
    $order = Order::with('user', 'orderItems.product')->findOrFail($id);
    return view('admin.viewOrder', compact('order'));
}

public function managePayment()
{
    $payments = Order::with('user')->orderBy('created_at', 'desc')->get();
    return view('admin.managePayment', compact('payments'));
}

public function manageUsers()
{
  $users = User::all();
  return view("admin.manageUsers", compact('users'));
}

public function edit($id)
{
    $user = User::findOrFail($id);
    return view('admin.editUser', compact('user'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
    ]);

    $user = User::findOrFail($id);
    $user->update([
      'name' => $request->name,
      'email' => $request->email,
    ]);

    return redirect()->route('admin.manageUsers')->with('success', 'User updated successfully!');
}

public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('admin.manageUsers')->with('success', 'User deleted successfully!');
}

public function manageSales()
{
  $sales = Order::where('isOrdered', true)->with('user')->latest()->get();
  return view('admin.manageSales', compact('sales')); 
}

public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return back()->with('error', 'You are not authorized as admin.');
            }
        }

        return back()->with('error', 'Invalid credentials.');
    }

    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
}

}

   


