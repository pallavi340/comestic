<?php
<<<<<<< HEAD
=======

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class UserController extends Controller
{
    public function dashboard(){
        return view('base.home');
    }

    public function manageAccount(){
        $user = Auth::user();
        return view('user.manageAccount');
    }
}
>>>>>>> f2d60769810e6d686503bc79323a2343028fa548
