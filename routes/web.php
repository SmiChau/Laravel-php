<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    session(['debugbar_test' => 'It works!']);
    $name = "Smriti Chaudhary";
    return view('welcome', ['name' => $name]);
})->name('home');