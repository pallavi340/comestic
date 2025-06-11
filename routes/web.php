<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'home'])->name('base.home');
// This code defines a route for the home page of a Laravel application.