<?php

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'home'])->name('base.home');
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/google', [GoogleController::class, 'redirectToGoogle'])->name('base.login');
Route::get('/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
