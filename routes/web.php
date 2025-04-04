<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/secret', function () {
    return view('auth/secret');
})->middleware("auth");

// RegisterController
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'create'])->middleware("guest");

// SessionController
Route::delete('/logout', [SessionController::class, 'destroy']);
Route::get('/login', [SessionController::class, 'create'])->name("login")->middleware("guest");
Route::post('/login', [SessionController::class, 'store']);