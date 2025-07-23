<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,AuthController,AdminCompanyController};

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/store', [AuthController::class, 'login_store'])->name('login_store');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/store', [AuthController::class, 'register_store'])->name('register_store');
Route::get('/verify', [AuthController::class, 'verify'])->name('verify');
Route::post('/verify/store', [AuthController::class, 'verify_store'])->name('verify_store');
Route::get('/success', [AuthController::class, 'success'])->name('success');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
//  Administrator
Route::middleware(['auth'])->group(function () {
    Route::get('/companies', [AdminCompanyController::class, 'index'])->name('companies');
    Route::post('/company/create/store', [AdminCompanyController::class, 'store'])->name('company_create');
});
// Drektor


