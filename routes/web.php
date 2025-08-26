<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// إذا تستخدم Laravel Breeze / Jetstream / Fortify، بعض الطرق موجودة تلقائيًا
Route::middleware(['auth'])->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email'); // تأكد من وجود هذا الـ view
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/'); // بعد التحقق ارجع للصفحة الرئيسية
    })->middleware(['auth', 'signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
});


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

