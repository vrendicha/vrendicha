<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);


// Halaman awal
Route::get('/', function () {
    return view('welcome');
});

// Dashboard (hanya untuk user yang sudah login dan terverifikasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk kategori dan produk
Route::middleware('auth')->group(function () {
    // Halaman profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ✅ Halaman list kategori
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

    // ✅ Halaman list produk
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
});

// Route auth (login, register, dll)
require __DIR__.'/auth.php';
