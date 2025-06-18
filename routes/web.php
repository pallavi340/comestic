<?php

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'home'])->name('base.home');
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/base/google',[GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/base/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/base/login',[GoogleController::class,'login'])->name('base.login');
Route::resource('/category', CategoryController::class);