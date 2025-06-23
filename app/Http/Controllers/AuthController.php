<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $req)
{
    if ($req->isMethod("post")) {
       
        $data = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($data)) {
            return redirect()->route('base.home')->with('msg', 'Login successful!');
        }
         else { 
            return redirect()->back()->withInput()->with('msg', 'Incorrect email or password');
        }
    }

    return view('base.login');
}


  public function register(Request $req){
        if($req->isMethod("post")){
         $data = $req->validate([
            'name' => ["required", "string"],
            'email' => ["required", "email"],
            'password' => ["required"],
         ]);

        $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
]);

         return redirect()->route("base.login");
    }
        return view("base.register");
    }
 public function logout(){
        Auth::logout();
        return redirect()->route("base.login");
    }

}
