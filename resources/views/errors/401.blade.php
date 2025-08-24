@extends('layouts.app')

@section('title', 'Royal Security | Unauthorized')

@section('content')
    <section class="min-h-screen bg-cover bg-center flex items-center justify-center text-center bg-gradient-to-r from-indigo-900 to-gray-900" data-aos="zoom-out">
        <div class="max-w-4xl px-6 text-white">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-4 leading-tight" data-en="401 - Unauthorized" data-ar="401 - غير مصرح">
                {{ app()->getLocale() === 'ar' ? '401 - غير مصرح' : '401 - Unauthorized' }}
            </h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8" data-en="You need to log in to access this page." data-ar="تحتاج إلى تسجيل الدخول للوصول إلى هذه الصفحة.">
                {{ app()->getLocale() === 'ar' ? 'تحتاج إلى تسجيل الدخول للوصول إلى هذه الصفحة.' : 'You need to log in to access this page.' }}
            </p>
            <a href="{{ route('login') }}"
               class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500 transition-all duration-300"
               data-en="Log In" data-ar="تسجيل الدخول">
                {{ app()->getLocale() === 'ar' ? 'تسجيل الدخول' : 'Log In' }}
            </a>
        </div>
    </section>
@endsection
