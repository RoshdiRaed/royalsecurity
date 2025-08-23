@extends('layouts.app')

@section('title', 'Royal Security | Services')

@section('content')
    <!-- Hero Section -->
    <section class="h-96 bg-cover bg-center flex items-center justify-center text-center bg-gradient-to-r from-indigo-900 to-gray-900" data-aos="zoom-out">
        <div class="max-w-4xl px-6 text-white">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight" data-en="Comprehensive Security Services" data-ar="خدمات الأمن الشاملة">Comprehensive Security Services</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto" data-en="Tailored solutions delivered by over 250 skilled professionals to protect your assets and operations." data-ar="حلول مخصصة يقدمها أكثر من 250 من المحترفين المهرة لحماية أصولك وعملياتك.">Tailored solutions delivered by over 250 skilled professionals to protect your assets and operations.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl font-bold text-gray-800" data-en="Our Services" data-ar="خدماتنا">Our Services</h2>
                <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto" data-en="Explore our range of security solutions designed to meet diverse needs with precision and expertise." data-ar="استكشف مجموعتنا من الحلول الأمنية المصممة لتلبية الاحتياجات المتنوعة بدقة وخبرة.">Explore our range of security solutions designed to meet diverse needs with precision and expertise.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Service 1 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6 space-x-reverse" data-aos="fade-up" data-aos-delay="0">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Comprehensive Security" data-ar="الأمن الشامل">Comprehensive Security</h3>
                        <p class="text-gray-600 mb-4" data-en="Customized security plans tailored to your specific needs, including detailed site evaluations and risk assessments to ensure maximum protection." data-ar="خطط أمنية مخصصة مصممة وفقًا لاحتياجاتك الخاصة، بما في ذلك تقييمات مفصلة للموقع وتقييمات المخاطر لضمان الحماية القصوى.">Customized security plans tailored to your specific needs, including detailed site evaluations and risk assessments to ensure maximum protection.</p>
                        <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Request a Quote" data-ar="طلب عرض أسعار">Request a Quote</a>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6 space-x-reverse" data-aos="fade-up" data-aos-delay="100">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Security & Guarding" data-ar="الأمن والحراسة">Security & Guarding</h3>
                        <p class="text-gray-600 mb-4" data-en="Professional guarding services for facilities of all types, from corporate offices to residential complexes, ensuring round-the-clock safety." data-ar="خدمات حراسة احترافية لجميع أنواع المرافق، من المكاتب التجارية إلى المجمعات السكنية، مما يضمن الأمان على مدار الساعة.">Professional guarding services for facilities of all types, from corporate offices to residential complexes, ensuring round-the-clock safety.</p>
                        <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Request a Quote" data-ar="طلب عرض أسعار">Request a Quote</a>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6 space-x-reverse" data-aos="fade-up" data-aos-delay="200">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Specialized Security" data-ar="الأمن المتخصص">Specialized Security</h3>
                        <p class="text-gray-600 mb-4" data-en="Advanced security systems for high-risk environments like banks, shopping malls, and towers, featuring cutting-edge technology and trained personnel." data-ar="أنظمة أمنية متقدمة للبيئات عالية المخاطر مثل البنوك والمراكز التجارية والأبراج، باستخدام تقنيات متطورة وأفراد مدربين.">Advanced security systems for high-risk environments like banks, shopping malls, and towers, featuring cutting-edge technology and trained personnel.</p>
                        <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Request a Quote" data-ar="طلب عرض أسعار">Request a Quote</a>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6 space-x-reverse" data-aos="fade-up" data-aos-delay="300">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a2 2 0 012-2h2a2 2 0 012 2v5m-4 0h4"></path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Construction Site Security" data-ar="أمن مواقع البناء">Construction Site Security</h3>
                        <p class="text-gray-600 mb-4" data-en="Tailored security solutions for construction projects, including perimeter monitoring and asset protection to prevent theft and vandalism." data-ar="حلول أمنية مخصصة لمشاريع البناء، بما في ذلك مراقبة المحيط وحماية الأصول لمنع السرقة والتخريب.">Tailored security solutions for construction projects, including perimeter monitoring and asset protection to prevent theft and vandalism.</p>
                        <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Request a Quote" data-ar="طلب عرض أسعار">Request a Quote</a>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6 space-x-reverse" data-aos="fade-up" data-aos-delay="400">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="VIP Protection" data-ar="حماية الشخصيات الهامة">VIP Protection</h3>
                        <p class="text-gray-600 mb-4" data-en="Elite protection services for high-profile individuals, offering discreet, highly trained personnel and personalized security plans." data-ar="خدمات حماية نخبوية للأفراد البارزين، تقدم أفرادًا مدربين تدريباً عالياً وخطط أمنية مخصصة.">Elite protection services for high-profile individuals, offering discreet, highly trained personnel and personalized security plans.</p>
                        <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Request a Quote" data-ar="طلب عرض أسعار">Request a Quote</a>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6 space-x-reverse" data-aos="fade-up" data-aos-delay="500">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 005.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Event Security" data-ar="أمن الفعاليات">Event Security</h3>
                        <p class="text-gray-600 mb-4" data-en="Comprehensive event security with advanced tools, crowd management, and coordinated teams to ensure safety and smooth operations." data-ar="أمن فعاليات شامل باستخدام أدوات متقدمة، إدارة الحشود، وفرق منسقة لضمان السلامة والعمليات السلسة.">Comprehensive event security with advanced tools, crowd management, and coordinated teams to ensure safety and smooth operations.</p>
                        <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Request a Quote" data-ar="طلب عرض أسعار">Request a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-indigo-900 to-gray-900 text-white py-24 text-center" data-aos="fade-down">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-4xl font-bold mb-4" data-en="Secure Your Future with Royal Security" data-ar="تأمين مستقبلك مع رويال للأمن">Secure Your Future with Royal Security</h2>
            <p class="text-lg mb-8" data-en="Contact us today to discuss your security needs and receive a tailored solution." data-ar="تواصلوا معنا اليوم لمناقشة احتياجاتكم الأمنية والحصول على حل مخصص.">Contact us today to discuss your security needs and receive a tailored solution.</p>
            <a href="{{ route('contact') }}"
                class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500" data-en="Get Started" data-ar="ابدأ الآن">Get Started</a>
        </div>
    </section>
@endsection
