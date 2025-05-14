<?php

use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UploadController;
use Illuminate\Contracts\Routing\UrlRoutable;
use Illuminate\Support\Facades\Route;



Route::get('/',[FrontendController::class,'index'])->name('welcome');

Route::get('about',[FrontendController::class,'about'])->name('about');

Route::get('contact',[FrontendController::class,'contact'])->name('contact');

Route::get('home',[FrontendController::class,'home'])->name('home');

Route::get('category',[FrontendController::class,'category'])->name('category');

Route::get('product',[FrontendController::class,'product'])->name('product');

Route::get('productDetail/{product:name}', [FrontendController::class, 'productDetail'])->name('productDetail');

Route::post('sale/{product:name}', [SaleController::class, 'sale'])->name('sale');

Route::get('cart',[FrontendController::class,'cart'])->name('cart');

Route::get('checkout',[FrontendController::class,'checkout'])->name('checkout');

Route::post('upload',[UploadController::class,'store'])->name('upload');

Route::prefix('file')->as('file.')->controller(FileController::class)->group(function () {
    Route::delete('{file}/delete','destroy')->name('destroy');
});

//Customer auth

Route::get('customer/register',[CustomerAuthController::class,'registerPage'])->name('customer.register');
Route::post('customer/register',[CustomerAuthController::class,'register'])->name('customer.register');

Route::get('customer/loginPage',[CustomerAuthController::class,'loginPage'])->name('customer.loginPage');
Route::post('customer/login',[CustomerAuthController::class,'login'])->name('customer.login');

require __DIR__.'/auth.php';
