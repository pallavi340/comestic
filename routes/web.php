<?php

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'home'])->name('base.home');
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
