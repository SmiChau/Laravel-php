<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'viewReg'])->name('register.view');
Route::get('/reg', [UserController::class, 'viewReg'])->name('register.view.old');
Route::post('/addUser',[UserController::class,'regUser']);

Route::post('/register', function () {
    // Logic for registration
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');
