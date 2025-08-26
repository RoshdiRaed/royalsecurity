@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-20 text-center">
    <h1 class="text-2xl font-bold mb-4">تحقق من بريدك الإلكتروني</h1>
    <p>لقد أرسلنا رابط تحقق إلى بريدك الإلكتروني. تحقق منه لتفعيل الحساب.</p>
    <form method="POST" action="{{ route('verification.send') }}" class="mt-4">
        @csrf
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">
            إعادة إرسال رابط التحقق
        </button>
    </form>
</div>
@endsection
