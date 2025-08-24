@extends('layouts.app')

@section('title', 'Royal Security | Page Not Found')

@section('content')
    <!-- 404 Hero Section -->
    <section class="min-h-screen bg-cover bg-center flex items-center justify-center text-center bg-gradient-to-r from-indigo-900 to-gray-900" data-aos="zoom-out">
        <div class="max-w-4xl px-6 text-white">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-4 leading-tight" data-en="404 - Page Not Found" data-ar="404 - الصفحة غير موجودة">
                {{ app()->getLocale() === 'ar' ? '404 - الصفحة غير موجودة' : '404 - Page Not Found' }}
            </h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8" data-en="Oops! It looks like the page you're looking for doesn't exist or has been moved." data-ar="عذرًا! يبدو أن الصفحة التي تبحث عنها غير موجودة أو تم نقلها.">
                {{ app()->getLocale() === 'ar' ? 'عذرًا! يبدو أن الصفحة التي تبحث عنها غير موجودة أو تم نقلها.' : 'Oops! It looks like the page youre looking for doesnt exist or has been moved.' }}
            </p>
            <a href="{{ route('home') }}"
               class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500 transition-all duration-300"
               data-en="Return to Home" data-ar="العودة إلى الرئيسية">
                {{ app()->getLocale() === 'ar' ? 'العودة إلى الرئيسية' : 'Return to Home' }}
            </a>
        </div>
    </section>
@endsection
