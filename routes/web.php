<?php

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('base.home');
    Route::get('/filter/{cat_id}', 'filter')->name('base.filter');
    Route::get('/search', 'search')->name('search');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/categories', 'categories')->name('base.categories');
    Route::get('/product/{slug}', 'productView')->name('base.productView');

    Route::post('/add-to-cart/{slug}', [OrderController::class, 'addToCart'])->name('base.addtocart');


    Route::match(['get', 'post'],'/base/register',[AuthController::class, 'register'])->name('base.register');
    Route::match(['get', 'post'], '/base/login', [AuthController::class, 'login'])->name('base.login');
    Route::get('/base/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');



Route::get('/base/google',[GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/base/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/base/login',[GoogleController::class,'login'])->name('base.login');
Route::resource('/category', CategoryController::class);
Route::resource('/products',ProductController::class);
Route::get("/product/{id}",[HomeController::class,"viewProduct"])->name("base.viewproduct");