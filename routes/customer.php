<?php

use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Customer\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard',[CustomerController::class,'dashboard'])->name('dashboard');

Route::put('logout',[CustomerAuthController::class,'logout'])->name('logout');

