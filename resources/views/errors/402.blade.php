@extends('layouts.app')

@section('title', 'Royal Security | Payment Required')

@section('content')
    <section class="min-h-screen bg-cover bg-center flex items-center justify-center text-center bg-gradient-to-r from-indigo-900 to-gray-900" data-aos="zoom-out">
        <div class="max-w-4xl px-6 text-white">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-4 leading-tight" data-en="402 - Payment Required" data-ar="402 - الدفع مطلوب">
                {{ app()->getLocale() === 'ar' ? '402 - الدفع مطلوب' : '402 - Payment Required' }}
            </h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8" data-en="A payment is required to access this content." data-ar="مطلوب دفع للوصول إلى هذا المحتوى.">
                {{ app()->getLocale() === 'ar' ? 'مطلوب دفع للوصول إلى هذا المحتوى.' : 'A payment is required to access this content.' }}
            </p>
            <a href="{{ route('home') }}"
               class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500 transition-all duration-300"
               data-en="Return to Home" data-ar="العودة إلى الرئيسية">
                {{ app()->getLocale() === 'ar' ? 'العودة إلى الرئيسية' : 'Return to Home' }}
            </a>
        </div>
    </section>
@endsection
