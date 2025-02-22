<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'login-register.login')->name('login');

Route::view('/register','login-register.register')->name('register');