<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servise', function () {
    return view('servise');
});

Route::get('/contact', function () {
    return view('contact');
});
