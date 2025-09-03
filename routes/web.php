<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/dashboard', fn() => redirect('/admin'))->name('dashboard');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/services', function () {
    return view('service');
})->name('service');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// شرط: إذا ما في مستخدمين → خلي register شغال
if (User::count() === 0) {
    require __DIR__ . '/auth.php';
} else {
    Route::middleware('guest')->group(function () {
        Route::get('/register', fn() => redirect('/login'))->name('register');
        require __DIR__ . '/auth.php';
    });
}
