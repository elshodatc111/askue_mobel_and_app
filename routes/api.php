<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthApiController;

Route::post('/register', [AuthApiController::class, 'register']);
Route::post('/login', [AuthApiController::class, 'login']);
Route::post('/verify', [AuthApiController::class, 'verify']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthApiController::class, 'logout']);
});
