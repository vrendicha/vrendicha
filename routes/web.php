<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductController;
Route::get('/products', [ProductController::class, 'index']);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

use App\Http\Controllers\OrderController;



Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('products', ProductController::class);

// Keranjang dummy route
Route::get('/cart', function () {
    return view('cart');
})->name('cart.index');