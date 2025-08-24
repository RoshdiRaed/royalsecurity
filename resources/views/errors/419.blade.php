@extends('layouts.app')

@section('title', 'Royal Security | Session Expired')

@section('content')
    <section class="min-h-screen bg-cover bg-center flex items-center justify-center text-center bg-gradient-to-r from-indigo-900 to-gray-900" data-aos="zoom-out">
        <div class="max-w-4xl px-6 text-white">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-4 leading-tight" data-en="419 - Session Expired" data-ar="419 - انتهت الجلسة">
                {{ app()->getLocale() === 'ar' ? '419 - انتهت الجلسة' : '419 - Session Expired' }}
            </h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8" data-en="Your session has expired. Please refresh and try again." data-ar="انتهت جلستك. يرجى تحديث الصفحة وإعادة المحاولة.">
                {{ app()->getLocale() === 'ar' ? 'انتهت جلستك. يرجى تحديث الصفحة وإعادة المحاولة.' : 'Your session has expired. Please refresh and try again.' }}
            </p>
            <a href="{{ url()->current() }}"
               class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500 transition-all duration-300"
               data-en="Refresh Page" data-ar="تحديث الصفحة">
                {{ app()->getLocale() === 'ar' ? 'تحديث الصفحة' : 'Refresh Page' }}
            </a>
        </div>
    </section>
@endsection
