<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

// Route untuk login
Route::get('login', function () {
    return view('auth.login'); // Menampilkan halaman login
})->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// Grup route yang membutuhkan autentikasi
Route::middleware(['auth'])->group(function () {
    // Route untuk daftar produk
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

    // Route untuk logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
