<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/package', function () {
    return view('package');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::view('/zone-price', 'zone_price');
