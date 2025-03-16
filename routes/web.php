<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/costume', function () {
    return view('costumePage');
});

Route::get('/booking', function () {
    return view('myBookingPage');
});

Route::get('/history', function () {
    return view('rentalHistory');
});