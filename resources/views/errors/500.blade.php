@extends('layouts.app')

@section('title', 'Royal Security | Server Error')

@section('content')
    <section class="min-h-screen bg-cover bg-center flex items-center justify-center text-center bg-gradient-to-r from-indigo-900 to-gray-900" data-aos="zoom-out">
        <div class="max-w-4xl px-6 text-white">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-4 leading-tight" data-en="500 - Server Error" data-ar="500 - خطأ في الخادم">
                {{ app()->getLocale() === 'ar' ? '500 - خطأ في الخادم' : '500 - Server Error' }}
            </h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8" data-en="Something went wrong on our end. We’re working to fix it." data-ar="حدث خطأ ما من جانبنا. نحن نعمل على إصلاحه.">
                {{ app()->getLocale() === 'ar' ? 'حدث خطأ ما من جانبنا. نحن نعمل على إصلاحه.' : 'Something went wrong on our end. We’re working to fix it.' }}
            </p>
            <a href="{{ route('home') }}"
               class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500 transition-all duration-300"
               data-en="Return to Home" data-ar="العودة إلى الرئيسية">
                {{ app()->getLocale() === 'ar' ? 'العودة إلى الرئيسية' : 'Return to Home' }}
            </a>
        </div>
    </section>
@endsection
