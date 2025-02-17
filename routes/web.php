<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

// Define the resource route for notes
Route::resource('notes', NoteController::class);

// Define the root route
Route::get('/', function () {
    return view('welcome');
});
