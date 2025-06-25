<?php

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('base.home');
    Route::get('/filter/{cat_id}', 'filter')->name('base.filter');
    Route::get('/search', 'search')->name('search');
    Route::get('/categories', 'categories')->name('base.categories');
    Route::get('/product/{slug}', 'productView')->name('base.productView');
    Route::get('/offer', 'offer')->name('base.offer');
    Route::get('/profile', 'profile')->name('base.profile');
    Route::get('/wishlist', 'wishlist')->name('base.wishlist');
});


    Route::match(['get', 'post'],'/cart', [OrderController::class, 'Cart'])->name('base.cart');
    Route::post('/add-to-cart/{slug}',[OrderController::class, 'addtocart'])->name('base.addtocart');


    Route::get('/user', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/myaccount', [UserController::class, 'manageAccount'])->name('user.manageAccount');
      Route::match(['get', 'post'],'/cart', [OrderController::class, 'Cart'])->name('base.cart')->middleware("auth");
  
    // Auth Routes
Route::controller(AuthController::class)->group(function() {
    Route::get('/base/register', 'register')->name('base.register');
    Route::post('base/register','storeUser')->name('storeUser');
    Route::get('/base/login', 'login')->name('base.login');
    Route::post('/base/login', 'loginUser')->name('loginUser');
    Route::get('/logout', 'logoutUser')->name('logout');
});
   
 Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

 Route::controller(UserController::class)->group(function(){
  Route::middleware("auth")->group(function(){
     Route::get('/user', [UserController::class, 'dashboard'])->name('user.dashboard');

});
   });

Route::get('/base/google',[GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/base/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/base/login',[GoogleController::class,'login'])->name('base.login');
Route::resource('/category', CategoryController::class);
Route::resource('/products',ProductController::class);
