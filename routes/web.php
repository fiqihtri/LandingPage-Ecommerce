<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('shop',[App\Http\Controllers\HomeController::class, 'shopGrid'])->name('shop');
Route::get('contact',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
