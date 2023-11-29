<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('shop',[App\Http\Controllers\HomeController::class, 'shopGrid'])->name('shop');
Route::get('contact',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('admin',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin');
