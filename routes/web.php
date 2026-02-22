<?php

use App\Http\Controllers\AttendeesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [AttendeesController::class, 'register'])->name('register');
