<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,AuthController};

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/store', [AuthController::class, 'login_store'])->name('login_store');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/verify', [AuthController::class, 'verify'])->name('verify');
Route::post('/verify/store', [AuthController::class, 'verify_store'])->name('verify_store');
Route::get('/success', [AuthController::class, 'success'])->name('success');


Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
