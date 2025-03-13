<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

// Define the resource route for notes
Route::resource('notes', NoteController::class);
Route::get('/restaurants', [ProductController::class, 'index']);

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Define the root route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect()->route('login');
});