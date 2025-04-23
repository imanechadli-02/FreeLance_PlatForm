<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\ProfileController;
use App\Http\Middleware\ApprovedMiddleware;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Registration Routes
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register.post');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Profile Routes (accès réservé aux utilisateurs connectés)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('client.profile');
    })->name('profile');

    Route::put('/profile', [LoginController::class, 'updateProfile'])->name('profile.update');

    // Dashboards for each role
    Route::get('/client/dashboard', function () {
        return view('client.dashboard');
    })->name('client.dashboard');

    Route::get('/developer/dashboard', function () {
        return view('developer.dashboard');
    })->name('developer.dashboard');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Route protégée (exemple général) avec validation de compte approuvé
Route::middleware(['auth', ApprovedMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
