<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Security | Gaza Strip</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #facc15;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hero-overlay {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8));
        }

        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-primary {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            transform: scale(1.05);
        }

        .footer-link {
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #facc15;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 leading-relaxed">

    <!-- Navbar -->
    <nav class="bg-gray-900 text-white shadow-lg fixed top-0 w-full z-50" data-aos="fade-down">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="./" class="text-3xl font-bold text-yellow-400 tracking-tight">Royal<span
                        class="text-white">Security</span></a>
                <div class="hidden md:flex space-x-8 text-base font-semibold">
                    <a href="./" class="nav-link hover:text-yellow-400">Dashboard</a>
                    <a href="./servise" class="nav-link hover:text-yellow-400">Services</a>
                    <a href="./contact" class="nav-link hover:text-yellow-400">Contact</a>
                    <a href="./controller" class="nav-link hover:text-yellow-400">Dashboard</a>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="tel:+970-59-999999" class="flex items-center text-yellow-400 hover:text-yellow-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        +970-59-999999
                    </a>
                    <a href="./" class="text-sm text-yellow-400 hover:text-yellow-300 uppercase">AR</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen bg-cover bg-center flex items-center justify-center text-center hero-overlay"
        style="background-image: url('./img/5.jpg');" data-aos="zoom-out">
        <div class="max-w-4xl px-6 text-white">
            <span class="uppercase tracking-widest text-yellow-400 text-sm font-semibold" data-aos="fade-up">Royal
                Security</span>
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight" data-aos="fade-right">Premier Security
                Solutions for International Institutions</h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-left">Trusted by global partners with
                over 250 highly trained security personnel in the Gaza Strip.</p>
            <div class="mt-6 flex justify-center space-x-4">
                <a href="./contact"
                    class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500"
                    data-aos="fade-up">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl font-bold text-gray-800">Our Core Strengths</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Delivering exceptional security services with unmatched
                    expertise and innovation.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-12">
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="0">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800">Decade of Expertise</h3>
                    <p class="text-gray-600 mb-4">Over 10 years of delivering top-tier security and protection services.
                    </p>
                    <a href="about.html" class="text-yellow-400 hover:text-yellow-500 font-medium">Learn More</a>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800">Cutting-Edge Quality</h3>
                    <p class="text-gray-600 mb-4">Leveraging modern technologies for superior security solutions.</p>
                    <a href="about.html" class="text-yellow-400 hover:text-yellow-500 font-medium">Learn More</a>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-2xl font-semibold mb-3 text-gray-800" >Elite Personnel</h3>
                    <p class="text-gray-600 mb-4">A robust team of over 250 skilled security professionals.</p>
                    <a href="about.html" class="text-yellow-400 hover:text-yellow-500 font-medium">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
            <img src="./img/logo.png" alt="Company Logo" class="rounded-xl shadow-lg" data-aos="fade-right" data-aos-delay="100">
            <div data-aos="fade-left" data-aos-delay="0">
                <h2 class="text-3xl font-bold mb-4">Tailored <span class="text-yellow-400">Security Solutions</span> for
                    Global Partners</h2>
                <p class="text-gray-600 mb-6">We provide comprehensive security services to protect our clients and
                    their international operations with precision and trust.</p>
                <a href="#"
                    class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500">Discover
                    More</a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-indigo-900 to-gray-900 text-white py-24 text-center">
        <div class="max-w-4xl mx-auto px-4" data-aos="fade-down" data-aos-delay="200">
            <h2 class="text-4xl font-bold mb-4">Built on Trust, Driven by Excellence</h2>
            <p class="text-lg mb-8">Our commitment to professionalism and continuous improvement sets us apart.</p>
            <a href="contact.html"
                class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500" data-aos="fade-up" data-aos-delay="200">Contact
                Us Today</a>
        </div>
    </section>

    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">What Our Clients Say</h2>
            <p class="text-lg text-gray-600 mb-16 max-w-2xl mx-auto">Trusted by international institutions, our clients’
                feedback reflects our commitment to excellence.</p>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Recommendation 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="0">
                    <div class="flex justify-center mb-4">
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Royal Security provided exceptional protection for our
                        regional offices. Their professionalism and attention to detail are unmatched."</p>
                    <h4 class="text-lg font-semibold text-gray-800">Ahmed Khalil</h4>
                    <p class="text-gray-500 text-sm">Director, Global NGO</p>
                </div>
                <!-- Recommendation 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex justify-center mb-4">
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Their team’s expertise ensured our event ran smoothly with
                        top-notch security. Highly recommended!"</p>
                    <h4 class="text-lg font-semibold text-gray-800">Sara Mahmoud</h4>
                    <p class="text-gray-500 text-sm">Event Organizer</p>
                </div>
                <!-- Recommendation 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex justify-center mb-4">
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-gray-600 italic mb-4">"The tailored security plan for our construction site was
                        flawless. Royal Security is a true partner."</p>
                    <h4 class="text-lg font-semibold text-gray-800">Omar Saleh</h4>
                    <p class="text-gray-500 text-sm">Project Manager</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 text-center" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-16">Our Comprehensive Services</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Comprehensive Security</h3>
                    <p class="text-gray-600">Customized security plans with detailed site assessments.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Security & Guarding</h3>
                    <p class="text-gray-600">Professional protection for facilities of all types.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Specialized Security</h3>
                    <p class="text-gray-600">Advanced systems for banks, malls, and high-rise buildings.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Construction Site Security</h3>
                    <p class="text-gray-600">Tailored solutions for projects under construction.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="500">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">VIP Protection</h3>
                    <p class="text-gray-600">Elite security services for high-profile individuals.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="600">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Event Security</h3>
                    <p class="text-gray-600">Robust security with advanced tools for events.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-16" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-12">
            <div>
                <h3 class="text-xl font-bold text-white mb-4">Royal Security</h3>
                <p class="text-gray-400">The premier choice for international institutions in the Gaza Strip,
                    delivering trusted security solutions.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold text-white mb-4">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="about.html" class="footer-link hover:text-yellow-400">About Us</a></li>
                    <li><a href="service.html" class="footer-link hover:text-yellow-400">Services</a></li>
                    <li><a href="contact.html" class="footer-link hover:text-yellow-400">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold text-white mb-4">Contact Us</h3>
                <p class="text-gray-400">Gaza Strip</p>
                <p class="text-gray-400">Phone: <a href="tel:+970-59-999999"
                        class="hover:text-yellow-400">059999999</a></p>
                <p class="text-gray-400">Email: <a href="mailto:info@royalsecurity.ps"
                        class="hover:text-yellow-400">info@royalsecurity.ps</a></p>
            </div>
            <div>
                <h3 class="text-xl font-bold text-white mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-yellow-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z">
                            </path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-yellow-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.1 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.708.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z">
                            </path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-yellow-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.148 3.227-1.691 4.746-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.228-.148-4.747-1.691-4.919-4.919-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.692-4.746 4.919-4.919 1.266-.058 1.644-.07 4.849-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0.Performance 3.259.014 3.668.072 4.947.2 4.358 2.618 6.78 6.981 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.981-6.981.058-1.281.072-1.689.072-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.981-6.981-1.281-.058-1.689-.072-4.948-.072zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.44-.645 1.44-1.44s-.645-1.44-1.44-1.44z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-gray-500 mt-12">
            &rArr; &copy; <?php echo date('Y'); ?> Royal Security. All rights reserved. &lArr;
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // animation happens only once
            duration: 1000, // animation duration
        });
    </script>

</body>

</html>
