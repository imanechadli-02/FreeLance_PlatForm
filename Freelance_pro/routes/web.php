<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\ApprovedMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client/dashboard', function () {
    return view('client.dashboard'); // or whatever view you want
})->name('client.dashboard')->middleware('auth');

// Registration Routes
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');


// Protected Routes
Route::middleware(['auth', ApprovedMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
