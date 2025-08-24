@extends('layouts.app')

@section('title', 'Royal Security | Our Work')

@section('content')
    <!-- Hero Section -->
    <section class="h-96 bg-cover bg-center flex items-center justify-center text-center bg-gradient-to-r from-indigo-900 to-gray-900" data-aos="zoom-out">
        <div class="max-w-4xl px-6 text-white">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight" data-en="Our Work" data-ar="أعمالنا">
                {{ app()->getLocale() === 'ar' ? 'أعمالنا' : 'Our Work' }}
            </h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto" data-en="Discover our portfolio of successful security projects, showcasing our expertise and commitment to safety." data-ar="اكتشف محفظتنا من المشاريع الأمنية الناجحة، التي تعرض خبرتنا والتزامنا بالسلامة.">
                {{ app()->getLocale() === 'ar' ? 'اكتشف محفظتنا من المشاريع الأمنية الناجحة، التي تعرض خبرتنا والتزامنا بالسلامة.' : 'Discover our portfolio of successful security projects, showcasing our expertise and commitment to safety.' }}
            </p>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl font-bold text-gray-800" data-en="Our Projects" data-ar="مشاريعنا">
                    {{ app()->getLocale() === 'ar' ? 'مشاريعنا' : 'Our Projects' }}
                </h2>
                <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto" data-en="Explore our range of completed projects, each tailored to meet unique security challenges with precision and innovation." data-ar="استكشف مجموعتنا من المشاريع المكتملة، كل منها مصمم لتلبية التحديات الأمنية الفريدة بدقة وابتكار.">
                    {{ app()->getLocale() === 'ar' ? 'استكشف مجموعتنا من المشاريع المكتملة، كل منها مصمم لتلبية التحديات الأمنية الفريدة بدقة وابتكار.' : 'Explore our range of completed projects, each tailored to meet unique security challenges with precision and innovation.' }}
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Project 1 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex flex-col items-start" data-aos="fade-up" data-aos-delay="0">
                    <img src="{{ asset('img/15.jpg') }}" alt="Security System Integration" class="w-full h-40 object-cover rounded-t-xl mb-4">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Security System Integration" data-ar="تكامل أنظمة الأمان">
                        {{ app()->getLocale() === 'ar' ? 'تكامل أنظمة الأمان' : 'Security System Integration' }}
                    </h3>
                    <p class="text-gray-600 mb-4" data-en="A comprehensive security solution for commercial buildings, integrating CCTV, alarms, and access control." data-ar="حل أمان شامل للمباني التجارية، يتضمن كاميرات المراقبة، الأجهزة الإنذارية، والتحكم بالوصول.">
                        {{ app()->getLocale() === 'ar' ? 'حل أمان شامل للمباني التجارية، يتضمن كاميرات المراقبة، الأجهزة الإنذارية، والتحكم بالوصول.' : 'A comprehensive security solution for commercial buildings, integrating CCTV, alarms, and access control.' }}
                    </p>
                    <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Learn More" data-ar="تعرف على المزيد">
                        {{ app()->getLocale() === 'ar' ? 'تعرف على المزيد' : 'Learn More' }}
                    </a>
                </div>
                <!-- Project 2 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex flex-col items-start" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('img/15.jpg') }}" alt="Smart Home Security" class="w-full h-40 object-cover rounded-t-xl mb-4">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Smart Home Security" data-ar="أمان المنزل الذكي">
                        {{ app()->getLocale() === 'ar' ? 'أمان المنزل الذكي' : 'Smart Home Security' }}
                    </h3>
                    <p class="text-gray-600 mb-4" data-en="An IoT-based home security system with real-time monitoring and mobile app control." data-ar="نظام أمان منزلي ذكي يعتمد على إنترنت الأشياء مع مراقبة فورية وتحكم عبر تطبيق الهاتف.">
                        {{ app()->getLocale() === 'ar' ? 'نظام أمان منزلي ذكي يعتمد على إنترنت الأشياء مع مراقبة فورية وتحكم عبر تطبيق الهاتف.' : 'An IoT-based home security system with real-time monitoring and mobile app control.' }}
                    </p>
                    <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Learn More" data-ar="تعرف على المزيد">
                        {{ app()->getLocale() === 'ar' ? 'تعرف على المزيد' : 'Learn More' }}
                    </a>
                </div>
                <!-- Project 3 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex flex-col items-start" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('img/15.jpg') }}" alt="Enterprise Surveillance" class="w-full h-40 object-cover rounded-t-xl mb-4">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Enterprise Surveillance" data-ar="مراقبة المؤسسات">
                        {{ app()->getLocale() === 'ar' ? 'مراقبة المؤسسات' : 'Enterprise Surveillance' }}
                    </h3>
                    <p class="text-gray-600 mb-4" data-en="Advanced surveillance system for large enterprises, featuring AI-powered analytics." data-ar="نظام مراقبة متقدم للمؤسسات الكبرى، مزود بتحليلات مدعومة بالذكاء الاصطناعي.">
                        {{ app()->getLocale() === 'ar' ? 'نظام مراقبة متقدم للمؤسسات الكبرى، مزود بتحليلات مدعومة بالذكاء الاصطناعي.' : 'Advanced surveillance system for large enterprises, featuring AI-powered analytics.' }}
                    </p>
                    <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Learn More" data-ar="تعرف على المزيد">
                        {{ app()->getLocale() === 'ar' ? 'تعرف على المزيد' : 'Learn More' }}
                    </a>
                </div>
                <!-- Project 4 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex flex-col items-start" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('img/15.jpg') }}" alt="Event Security" class="w-full h-40 object-cover rounded-t-xl mb-4">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Event Security" data-ar="أمن الفعاليات">
                        {{ app()->getLocale() === 'ar' ? 'أمن الفعاليات' : 'Event Security' }}
                    </h3>
                    <p class="text-gray-600 mb-4" data-en="Comprehensive event security with advanced tools and coordinated teams for safe and smooth operations." data-ar="أمن فعاليات شامل باستخدام أدوات متقدمة وفرق منسقة لضمان العمليات الآمنة والسلسة.">
                        {{ app()->getLocale() === 'ar' ? 'أمن فعاليات شامل باستخدام أدوات متقدمة وفرق منسقة لضمان العمليات الآمنة والسلسة.' : 'Comprehensive event security with advanced tools and coordinated teams for safe and smooth operations.' }}
                    </p>
                    <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Learn More" data-ar="تعرف على المزيد">
                        {{ app()->getLocale() === 'ar' ? 'تعرف على المزيد' : 'Learn More' }}
                    </a>
                </div>
                <!-- Project 5 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex flex-col items-start" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('img/15.jpg') }}" alt="VIP Protection" class="w-full h-40 object-cover rounded-t-xl mb-4">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="VIP Protection" data-ar="حماية الشخصيات الهامة">
                        {{ app()->getLocale() === 'ar' ? 'حماية الشخصيات الهامة' : 'VIP Protection' }}
                    </h3>
                    <p class="text-gray-600 mb-4" data-en="Elite protection services for high-profile individuals with discreet, highly trained personnel." data-ar="خدمات حماية نخبوية للأفراد البارزين مع أفراد مدربين تدريباً عالياً.">
                        {{ app()->getLocale() === 'ar' ? 'خدمات حماية نخبوية للأفراد البارزين مع أفراد مدربين تدريباً عالياً.' : 'Elite protection services for high-profile individuals with discreet, highly trained personnel.' }}
                    </p>
                    <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Learn More" data-ar="تعرف على المزيد">
                        {{ app()->getLocale() === 'ar' ? 'تعرف على المزيد' : 'Learn More' }}
                    </a>
                </div>
                <!-- Project 6 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex flex-col items-start" data-aos="fade-up" data-aos-delay="500">
                    <img src="{{ asset('img/15.jpg') }}" alt="Construction Site Security" class="w-full h-40 object-cover rounded-t-xl mb-4">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Construction Site Security" data-ar="أمن مواقع البناء">
                        {{ app()->getLocale() === 'ar' ? 'أمن مواقع البناء' : 'Construction Site Security' }}
                    </h3>
                    <p class="text-gray-600 mb-4" data-en="Tailored security for construction projects, including perimeter monitoring and asset protection." data-ar="أمن مخصص لمشاريع البناء، يتضمن مراقبة المحيط وحماية الأصول.">
                        {{ app()->getLocale() === 'ar' ? 'أمن مخصص لمشاريع البناء، يتضمن مراقبة المحيط وحماية الأصول.' : 'Tailored security for construction projects, including perimeter monitoring and asset protection.' }}
                    </p>
                    <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Learn More" data-ar="تعرف على المزيد">
                        {{ app()->getLocale() === 'ar' ? 'تعرف على المزيد' : 'Learn More' }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-indigo-900 to-gray-900 text-white py-24 text-center" data-aos="fade-down">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-4xl font-bold mb-4" data-en="Partner with Royal Security" data-ar="شارك مع رويال للأمن">
                {{ app()->getLocale() === 'ar' ? 'شارك مع رويال للأمن' : 'Partner with Royal Security' }}
            </h2>
            <p class="text-lg mb-8" data-en="Contact us today to explore how our expertise can safeguard your next project." data-ar="تواصلوا معنا اليوم لاستكشاف كيف يمكن لخبرتنا حماية مشروعكم القادم.">
                {{ app()->getLocale() === 'ar' ? 'تواصلوا معنا اليوم لاستكشاف كيف يمكن لخبرتنا حماية مشروعكم القادم.' : 'Contact us today to explore how our expertise can safeguard your next project.' }}
            </p>
            <a href="{{ route('contact') }}"
               class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500"
               data-en="Get Started" data-ar="ابدأ الآن">
                {{ app()->getLocale() === 'ar' ? 'ابدأ الآن' : 'Get Started' }}
            </a>
        </div>
    </section>
@endsection
