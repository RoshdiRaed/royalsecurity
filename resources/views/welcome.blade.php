@extends('layouts.app')

@section('title', 'Royal Security | Gaza Strip')

@section('content')
    <!-- Hero Section (Static) -->
    <section class="h-screen bg-cover bg-center flex items-center justify-center text-center hero-overlay"
        style="background-image: url('{{ asset('img/9.jpg') }}');" data-aos="zoom-out">
        <div class="max-w-4xl px-6 text-white">
            <span class="uppercase tracking-widest text-yellow-400 text-sm font-semibold" data-aos="fade-up"
                data-en="Royal Security" data-ar="رويال سيكيوريتي">Royal Security</span>
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight" data-aos="fade-right"
                data-en="Premier Security Solutions for International Institutions"
                data-ar="حلول أمنية متميزة للمؤسسات الدولية">Premier Security Solutions for International Institutions</h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-left"
                data-en="Trusted by global partners with over 250 highly trained security personnel in the Gaza Strip."
                data-ar="موثوق به من قبل الشركاء العالميين مع أكثر من 250 من أفراد الأمن المدربين تدريباً عالياً في قطاع غزة.">
                Trusted by global partners with over 250 highly trained security personnel in the Gaza Strip.</p>

            <div class="mt-6 flex justify-center items-center gap-4">
                <!-- زر التواصل -->
                <a href="{{ route('contact') }}"
                    class="btn-primary flex items-center justify-center bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500 transition min-w-[140px]"
                    data-aos="fade-up" data-en="Get in Touch" data-ar="تواصلوا معنا">
                    <span class="text-center">{{ app()->getLocale() === 'ar' ? 'تواصلوا معنا' : 'Get in Touch' }}</span>
                </a>

                <!-- زر الدخول للـ Admin -->
                <span data-aos="fade-down">
                    <a href="{{ url('/admin') }}"
                        class="flex items-center justify-center w-12 h-12 bg-gray-800 hover:bg-yellow-400 text-yellow-400 hover:text-gray-900 rounded-full shadow-lg transition transform hover:-translate-y-1"
                        title="Admin Panel">
                        <span>🔑</span>
                    </a>
                </span>
            </div>
        </div>
    </section>


    <!-- Services Overview -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl font-bold text-gray-800" data-en="Our Core Strengths" data-ar="نقاط قوتنا الأساسية">Our
                    Core Strengths</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto"
                    data-en="Delivering exceptional security services with unmatched expertise and innovation."
                    data-ar="تقديم خدمات أمنية استثنائية بخبرة وابتكار لا مثيل لهما.">Delivering exceptional security
                    services with unmatched expertise and innovation.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-12">
                @foreach (\App\Models\Service::take(3)->get() as $service)
                    <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up"
                        data-aos-delay="{{ $loop->index * 200 }}">
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="{{ $service->title_en }}"
                            data-ar="{{ $service->title_ar }}">
                            {{ $service->title_en }}
                        </h3>
                        <p class="text-gray-600 mb-4" data-en="{{ $service->description_en }}"
                            data-ar="{{ $service->description_ar }}">
                            {{ $service->description_en }}
                        </p>
                        <a href="{{ route('service') }}" class="text-yellow-400 hover:text-yellow-500 font-medium"
                            data-en="Learn More" data-ar="تعرف على المزيد">Learn More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
            @php $about = \App\Models\About::first(); @endphp
            <img src="{{ asset('img/logo.png') }}" alt="Company Logo" class="rounded-xl shadow-lg" data-aos="fade-right"
                data-aos-delay="100">
            <div data-aos="fade-left" data-aos-delay="0">
                <h2 class="text-3xl font-bold mb-4"
                    data-en="{{ $about ? $about->title_en : 'Tailored Security Solutions' }}"
                    data-ar="{{ $about ? $about->title_ar : 'حلول أمنية مخصصة' }}">
                    {{ $about ? $about->title_en : 'Tailored Security Solutions' }}
                </h2>
                <p class="text-gray-600 mb-6"
                    data-en="{{ $about ? $about->description_en : 'We provide comprehensive security services...' }}"
                    data-ar="{{ $about ? $about->description_ar : 'نحن نقدم خدمات أمنية شاملة...' }}">
                    {{ $about ? $about->description_en : 'We provide comprehensive security services...' }}
                </p>
                <a href="{{ route('contact') }}"
                    class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500"
                    data-en="Discover More" data-ar="اكتشف المزيد">Discover More</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4" data-en="What Our Clients Say" data-ar="ماذا يقول عملاؤنا">
                What Our Clients Say</h2>
            <p class="text-lg text-gray-600 mb-16 max-w-2xl mx-auto"
                data-en="Trusted by international institutions, our clients’ feedback reflects our commitment to excellence."
                data-ar="موثوق به من قبل المؤسسات الدولية، تعكس تعليقات عملائنا التزامنا بالتميز.">Trusted by international
                institutions, our clients’ feedback reflects our commitment to excellence.</p>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach (\App\Models\Testimonial::all() as $testimonial)
                    <div class="bg-white p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up"
                        data-aos-delay="{{ $loop->index * 200 }}">
                        <div class="flex justify-center mb-4">
                            @for ($i = 0; $i < $testimonial->rating; $i++)
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-gray-600 italic mb-4" data-en="{{ $testimonial->content_en }}"
                            data-ar="{{ $testimonial->content_ar }}">
                            {{ $testimonial->content_en }}
                        </p>
                        <h4 class="text-lg font-semibold text-gray-800" data-en="{{ $testimonial->name_en }}"
                            data-ar="{{ $testimonial->name_ar }}">
                            {{ $testimonial->name_en }}
                        </h4>
                        <p class="text-gray-500 text-sm" data-en="{{ $testimonial->position_en }}"
                            data-ar="{{ $testimonial->position_ar }}">
                            {{ $testimonial->position_en }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 text-center" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-16" data-en="Our Comprehensive Services" data-ar="خدماتنا الشاملة">Our
                Comprehensive Services</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach (\App\Models\Service::all() as $service)
                    <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up"
                        data-aos-delay="{{ $loop->index * 100 }}">
                        <h3 class="text-xl font-semibold mb-3 text-gray-800" data-en="{{ $service->title_en }}"
                            data-ar="{{ $service->title_ar }}">
                            {{ $service->title_en }}
                        </h3>
                        <p class="text-gray-600" data-en="{{ $service->description_en }}"
                            data-ar="{{ $service->description_ar }}">
                            {{ $service->description_en }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
