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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/services', function () {
    return view('services');
});


Route::get('/reports', function () {
    return view('reports');
});


Route::get('/clients', function () {
    return view('clients');
});


Route::get('/settings', function () {
    return view('settings');
});
