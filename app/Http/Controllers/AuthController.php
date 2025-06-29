<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
 
    public function register(){
        return view('base.register');
    }

    public function storeUser(Request $req ){
       $data = $req->validate([
         "name" => "required|string",
         "contact" => "required|max:10|min:10|unique:users",
         "email" => "required|string|unique:users",
         "password" => "required|max:8",
       ]);

       $data = User::create($data);

       return redirect()->route('base.login');
    }

    public function login(){
        return view('base.login');
    }

    public function loginUser(Request $req){
        $data = $req->validate([
           "email" =>'required|email',
           "password" =>'required|max:8',
        ]);

        if(Auth::attempt($data)){
<<<<<<< HEAD
            return redirect()->route('base.home');
=======
            return redirect()->route('base.home')->with("msg", "Login successful");
>>>>>>> f2d60769810e6d686503bc79323a2343028fa548
        }
        else{
            return redirect()->back()->with("msg", "Invalid email & password");
        }
    }

    public function logoutUser(){
        Auth::logout();
        return redirect()->route('base.login');
    }
}
