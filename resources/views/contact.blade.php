@extends('layouts.app')

@section('title', 'Royal Security | Contact')

@section('content')
    <!-- Hero Section (Static) -->
    <section class="h-96 bg-cover bg-center flex items-center justify-center text-center bg-gradient-to-r from-indigo-900 to-gray-900">
        <div class="max-w-4xl px-6 text-white">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight" data-en="Get in Touch" data-ar="تواصلوا معنا">Get in Touch</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto" data-en="Contact Royal Security to discuss your security needs and discover tailored solutions for your organization." data-ar="تواصلوا مع رويال سيكيوريتي لمناقشة احتياجاتكم الأمنية واكتشاف الحلول المخصصة لمؤسستكم.">Contact Royal Security to discuss your security needs and discover tailored solutions for your organization.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover">
                <h2 class="text-3xl font-bold text-gray-800 mb-6" data-en="Send Us a Message" data-ar="أرسل لنا رسالة">Send Us a Message</h2>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700" data-en="Full Name" data-ar="الاسم الكامل">Full Name</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm input-focus"
                            required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700" data-en="Email Address" data-ar="البريد الإلكتروني">Email Address</label>
                        <input type="email" id="email" name="email"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm input-focus"
                            required>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700" data-en="Phone Number" data-ar="رقم الهاتف">Phone Number</label>
                        <input type="tel" id="phone" name="phone"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm input-focus">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700" data-en="Message" data-ar="الرسالة">Message</label>
                        <textarea id="message" name="message" rows="5"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm input-focus" required></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="btn-primary w-full bg-yellow-400 text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-yellow-500" data-en="Submit Message" data-ar="إرسال الرسالة">Submit Message</button>
                    </div>
                </form>
            </div>
            <!-- Contact Info & Map -->
            <div class="space-y-8">
                @php $contactInfo = \App\Models\ContactInfo::first(); @endphp
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6" data-en="Contact Information" data-ar="معلومات الاتصال">Contact Information</h2>
                    <ul class="space-y-4 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-yellow-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span data-en="{{ $contactInfo ? $contactInfo->address_en : 'Gaza Strip, Palestine' }}" data-ar="{{ $contactInfo ? $contactInfo->address_ar : 'غزة، فلسطين' }}">
                                {{ $contactInfo ? $contactInfo->address_en : 'Gaza Strip, Palestine' }}
                            </span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-yellow-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <a href="tel:{{ $contactInfo ? $contactInfo->phone : '+970-59-999999' }}" class="hover:text-yellow-400"><span dir="ltr" data-en="{{ $contactInfo ? $contactInfo->phone : '059999999' }}" data-ar="{{ $contactInfo ? $contactInfo->phone : '059999999' }}">{{ $contactInfo ? $contactInfo->phone : '059999999' }}</span></a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-yellow-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <a href="mailto:{{ $contactInfo ? $contactInfo->email : 'info@royalsecurity.ps' }}" class="hover:text-yellow-400" data-en="{{ $contactInfo ? $contactInfo->email : 'info@royalsecurity.ps' }}" data-ar="{{ $contactInfo ? $contactInfo->email : 'info@royalsecurity.ps' }}">{{ $contactInfo ? $contactInfo->email : 'info@royalsecurity.ps' }}</a>
                        </li>
                    </ul>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6" data-en="Our Location" data-ar="موقعنا">Our Location</h2>
                    <div class="h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                        {!! $contactInfo && $contactInfo->map_embed ? $contactInfo->map_embed : '<p class="text-gray-500" data-en="Interactive Map Placeholder (Embed Google Maps or similar here)" data-ar="عنصر نائب للخريطة التفاعلية (قم بتضمين خرائط جوجل أو ما شابه هنا)">Interactive Map Placeholder (Embed Google Maps or similar here)</p>' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
