<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

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

// Language toggle route
Route::post('/set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session()->put('locale', $locale);
        app()->setLocale($locale);
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false, 'error' => 'Invalid locale'], 400);
})->name('set.locale');

Route::get('/create-admin-temp', function () {
    \App\Models\User::updateOrCreate(
        ['email' => 'admin@gmail.com'],
        [
            'name' => 'Admin',
            'password' => \Illuminate\Support\Facades\Hash::make('1234'),
            'is_admin' => 1,
        ]
    );
    return 'Admin created!';
});
