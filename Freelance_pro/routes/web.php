<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;  // Import RegisterController

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register'); 
})->name('register');

// Corrected route for handling the POST request
Route::post('/register', [RegisterController::class, 'register']);
