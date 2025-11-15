<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // <-- add this line

Route::get('/', function () {
    return view('welcome');
});

// Your activity routes
Route::get('/register', [AuthController::class, 'showRegister']);
Route::get('/login', [AuthController::class, 'showLogin']);
Route::get('/forgot-password', [AuthController::class, 'showForgotPassword']);
