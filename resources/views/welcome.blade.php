@extends('layouts.app')

@section('title', 'Royal Security | Gaza Strip')

@section('content')
    <!-- Hero Section -->
    <section class="h-screen bg-cover bg-center flex items-center justify-center text-center hero-overlay"
        style="background-image: url('{{ asset('img/5.jpg') }}');" data-aos="zoom-out">
        <div class="max-w-4xl px-6 text-white">
            <span class="uppercase tracking-widest text-yellow-400 text-sm font-semibold" data-aos="fade-up" data-en="Royal Security" data-ar="رويال للأمن">Royal Security</span>
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight" data-aos="fade-right" data-en="Premier Security Solutions for International Institutions" data-ar="حلول أمنية متميزة للمؤسسات الدولية">Premier Security Solutions for International Institutions</h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-left" data-en="Trusted by global partners with over 250 highly trained security personnel in the Gaza Strip." data-ar="موثوق به من قبل الشركاء العالميين مع أكثر من 250 من أفراد الأمن المدربين تدريباً عالياً في قطاع غزة.">Trusted by global partners with over 250 highly trained security personnel in the Gaza Strip.</p>
            <div class="mt-6 flex justify-center space-x-4 space-x-reverse">
                <a href="{{ route('contact') }}"
                    class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500"
                    data-aos="fade-up" data-en="Get in Touch" data-ar="تواصلوا معنا">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl font-bold text-gray-800" data-en="Our Core Strengths" data-ar="نقاط قوتنا الأساسية">Our Core Strengths</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto" data-en="Delivering exceptional security services with unmatched expertise and innovation." data-ar="تقديم خدمات أمنية استثنائية بخبرة وابتكار لا مثيل لهما.">Delivering exceptional security services with unmatched expertise and innovation.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-12">
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="0">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Decade of Expertise" data-ar="عقد من الخبرة">Decade of Expertise</h3>
                    <p class="text-gray-600 mb-4" data-en="Over 10 years of delivering top-tier security and protection services." data-ar="أكثر من 10 سنوات من تقديم خدمات الأمن والحماية من الطراز الأول.">Over 10 years of delivering top-tier security and protection services.</p>
                    <a href="about.html" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Learn More" data-ar="تعرف على المزيد">Learn More</a>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Cutting-Edge Quality" data-ar="جودة متطورة">Cutting-Edge Quality</h3>
                    <p class="text-gray-600 mb-4" data-en="Leveraging modern technologies for superior security solutions." data-ar="الاستفادة من التقنيات الحديثة لحلول أمنية متميزة.">Leveraging modern technologies for superior security solutions.</p>
                    <a href="about.html" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Learn More" data-ar="تعرف على المزيد">Learn More</a>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800" data-en="Elite Personnel" data-ar="أفراد النخبة">Elite Personnel</h3>
                    <p class="text-gray-600 mb-4" data-en="A robust team of over 250 skilled security professionals." data-ar="فريق قوي يضم أكثر من 250 من المحترفين الأمنيين المهرة.">A robust team of over 250 skilled security professionals.</p>
                    <a href="about.html" class="text-yellow-400 hover:text-yellow-500 font-medium" data-en="Learn More" data-ar="تعرف على المزيد">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Company Logo" class="rounded-xl shadow-lg" data-aos="fade-right" data-aos-delay="100">
            <div data-aos="fade-left" data-aos-delay="0">
                <h2 class="text-3xl font-bold mb-4" data-en="Tailored Security Solutions for Global Partners" data-ar="حلول أمنية مخصصة للشركاء العالميين">Tailored <span class="text-yellow-400">Security Solutions</span> for Global Partners</h2>
                <p class="text-gray-600 mb-6" data-en="We provide comprehensive security services to protect our clients and their international operations with precision and trust." data-ar="نحن نقدم خدمات أمنية شاملة لحماية عملائنا وعملياتهم الدولية بدقة وثقة.">We provide comprehensive security services to protect our clients and their international operations with precision and trust.</p>
                <a href="#"
                    class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500" data-en="Discover More" data-ar="اكتشف المزيد">Discover More</a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-indigo-900 to-gray-900 text-white py-24 text-center">
        <div class="max-w-4xl mx-auto px-4" data-aos="fade-down" data-aos-delay="200">
            <h2 class="text-4xl font-bold mb-4" data-en="Built on Trust, Driven by Excellence" data-ar="مبني على الثقة، مدفوع بالتميز">Built on Trust, Driven by Excellence</h2>
            <p class="text-lg mb-8" data-en="Our commitment to professionalism and continuous improvement sets us apart." data-ar="التزامنا بالاحترافية والتحسين المستمر يميزنا.">Our commitment to professionalism and continuous improvement sets us apart.</p>
            <a href="{{ route('contact') }}"
                class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500" data-aos="fade-up" data-aos-delay="200" data-en="Contact Us Today" data-ar="اتصل بنا اليوم">Contact Us Today</a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4" data-en="What Our Clients Say" data-ar="ماذا يقول عملاؤنا">What Our Clients Say</h2>
            <p class="text-lg text-gray-600 mb-16 max-w-2xl mx-auto" data-en="Trusted by international institutions, our clients’ feedback reflects our commitment to excellence." data-ar="موثوق به من قبل المؤسسات الدولية، تعكس تعليقات عملائنا التزامنا بالتميز.">Trusted by international institutions, our clients’ feedback reflects our commitment to excellence.</p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="0">
                    <div class="flex justify-center mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-gray-600 italic mb-4" data-en="Royal Security provided exceptional protection for our regional offices. Their professionalism and attention to detail are unmatched." data-ar="قدمت رويال للأمن حماية استثنائية لمكاتبنا الإقليمية. احترافيتهم واهتمامهم بالتفاصيل لا مثيل لهما.">Royal Security provided exceptional protection for our regional offices. Their professionalism and attention to detail are unmatched.</p>
                    <h4 class="text-lg font-semibold text-gray-800">Ahmed Khalil</h4>
                    <p class="text-gray-500 text-sm" data-en="Director, Global NGO" data-ar="مدير، منظمة غير حكومية عالمية">Director, Global NGO</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex justify-center mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-gray-600 italic mb-4" data-en="Their team’s expertise ensured our event ran smoothly with top-notch security. Highly recommended!" data-ar="ضمنت خبرة فريقهم سير الحدث بسلاسة مع أمن من الطراز الأول. موصى به بشدة!">Their team’s expertise ensured our event ran smoothly with top-notch security. Highly recommended!</p>
                    <h4 class="text-lg font-semibold text-gray-800">Sara Mahmoud</h4>
                    <p class="text-gray-500 text-sm" data-en="Event Organizer" data-ar="منظمة الأحداث">Event Organizer</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex justify-center mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-gray-600 italic mb-4" data-en="The tailored security plan for our construction site was flawless. Royal Security is a true partner." data-ar="كانت خطة الأمن المخصصة لموقع البناء الخاص بنا خالية من العيوب. رويال للأمن شريك حقيقي.">The tailored security plan for our construction site was flawless. Royal Security is a true partner.</p>
                    <h4 class="text-lg font-semibold text-gray-800">Omar Saleh</h4>
                    <p class="text-gray-500 text-sm" data-en="Project Manager" data-ar="مدير المشروع">Project Manager</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 text-center" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-16" data-en="Our Comprehensive Services" data-ar="خدماتنا الشاملة">Our Comprehensive Services</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800" data-en="Comprehensive Security" data-ar="الأمن الشامل">Comprehensive Security</h3>
                    <p class="text-gray-600" data-en="Customized security plans with detailed site assessments." data-ar="خطط أمنية مخصصة مع تقييمات مفصلة للموقع.">Customized security plans with detailed site assessments.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800" data-en="Security & Guarding" data-ar="الأمن والحراسة">Security & Guarding</h3>
                    <p class="text-gray-600" data-en="Professional protection for facilities of all types." data-ar="حماية احترافية لجميع أنواع المرافق.">Professional protection for facilities of all types.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800" data-en="Specialized Security" data-ar="الأمن المتخصص">Specialized Security</h3>
                    <p class="text-gray-600" data-en="Advanced systems for banks, malls, and high-rise buildings." data-ar="أنظمة متقدمة للبنوك والمراكز التجارية والمباني العالية.">Advanced systems for banks, malls, and high-rise buildings.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800" data-en="Construction Site Security" data-ar="أمن مواقع البناء">Construction Site Security</h3>
                    <p class="text-gray-600" data-en="Tailored solutions for projects under construction." data-ar="حلول مخصصة للمشاريع قيد الإنشاء.">Tailored solutions for projects under construction.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="500">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800" data-en="VIP Protection" data-ar="حماية الشخصيات الهامة">VIP Protection</h3>
                    <p class="text-gray-600" data-en="Elite security services for high-profile individuals." data-ar="خدمات أمنية نخبوية للأفراد البارزين.">Elite security services for high-profile individuals.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="600">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800" data-en="Event Security" data-ar="أمن الفعاليات">Event Security</h3>
                    <p class="text-gray-600" data-en="Robust security with advanced tools for events." data-ar="أمن قوي مع أدوات متقدمة للفعاليات.">Robust security with advanced tools for events.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
