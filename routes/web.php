<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('registration');
})->name('register.view');

Route::post('/register', function () {
    // Logic for registration
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');
