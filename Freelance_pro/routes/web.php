<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\ProfileController;
use App\Http\Middleware\ApprovedMiddleware;
// use App\Http\Controllers\ServiceController;

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

// Protected Routes
Route::middleware(['auth'])->group(function () {
    // Profile Routes
    Route::get('/profile', function () {
        return view('client.profile');
    })->name('profile');
    Route::put('/profile', [LoginController::class, 'updateProfile'])->name('profile.update');

    // Dashboard Routes
    Route::get('/client/dashboard', function () {
        return view('client.dashboard');
    })->name('client.dashboard');
    Route::get('/developer/dashboard', function () {
        return view('developer.dashboard');
    })->name('developer.dashboard');
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // User Management Routes
    Route::prefix('admin')->group(function () {
        Route::get('/users', [AdminController::class, 'index'])->name('users.index');
        Route::post('/users/{user}/approve', [AdminController::class, 'approve'])->name('users.approve');
        Route::delete('/users/{user}', [AdminController::class, 'delete'])->name('users.delete');
    });
});

// Approved User Routes
Route::middleware(['auth', ApprovedMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
