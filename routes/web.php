<?php

use Illuminate\Support\Facades\Route;
// first method to make a route
Route::get('/', function () {
    return view('welcome');
});
// second method to make a route
// Route::view('/home','home');
