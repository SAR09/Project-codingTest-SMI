<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;


// Route::get('/', function () {
//     return view('welcome');
// });

// route for login
Route::get('login', function () {
    return view('auth.login'); // Menampilkan halaman login
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');


// route for products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// route for logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');