<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Produk publik
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Tentang Kami
    Route::view('/tentang-kami', 'pages.tentang')->name('tentang');

    // Testimoni
    Route::view('/testimoni', 'pages.testimoni')->name('testimoni');
    
    // Profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Keranjang
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{productId}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

    // Checkout
    Route::get('/checkout/confirm', [OrderController::class, 'confirm'])->name('checkout.confirm');
    Route::post('/checkout/process', [OrderController::class, 'process'])->name('checkout.process');

    // Buy Now Confirm & Process
    Route::get('/checkout/buy-now/{product}/confirm', [OrderController::class, 'confirmBuyNow'])->name('checkout.buyNow.confirm');
    Route::post('/checkout/buy-now/{product}', [OrderController::class, 'buyNow'])->name('checkout.buyNow');

    // Orders
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}/invoice', [OrderController::class, 'invoice'])->name('orders.invoice');
    Route::get('/orders/thankyou', fn() => view('order.thankyou'))->name('orders.thankyou');
});

// Cek gambar storage
Route::get('/cek-gambar-produk', function () {
    $file = 'produk/Hugo_Boss_Scent_Le_Parfum_Women.jpg';
    $exists = Storage::disk('public')->exists($file);
    return $exists
        ? '✅ Gambar ditemukan: storage/app/public/' . $file
        : '❌ Gambar tidak ditemukan: ' . $file;
});

// Auth
require __DIR__.'/auth.php';
