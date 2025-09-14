<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    // Mengarahkan ke route bernama 'login' (/login)
    return redirect()->route('login');
});

// GROUP UNTUK PENGGUNA YANG BELUM LOGIN (TAMU)
Route::middleware('guest')->group(function () {
    // Menampilkan form
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::get('register', [AuthController::class, 'registerForm'])->name('register');

    // Memproses form
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
});

// GROUP UNTUK PENGGUNA YANG SUDAH LOGIN
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
