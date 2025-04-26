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
                    <a href="./welcome" class="nav-link hover:text-yellow-400">Home</a>
                    <a href="./servise" class="nav-link hover:text-yellow-400">Services</a>
                    <a href="./contact" class="nav-link hover:text-yellow-400">Contact</a>
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
    <section
        class="h-96 bg-cover bg-center flex items-center justify-center text-center bg-gradient-to-r from-indigo-900 to-gray-900">
        <div class="max-w-4xl px-6 text-white">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">Comprehensive Security Services</h1>
            <p class="text-lg md:text-xl max-w-2xl mx-auto">Tailored solutions delivered by over 250 skilled
                professionals to protect your assets and operations.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800">Our Services</h2>
                <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto">Explore our range of security solutions designed
                    to meet diverse needs with precision and expertise.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Service 1 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                        </path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800">Comprehensive Security</h3>
                        <p class="text-gray-600 mb-4">Customized security plans tailored to your specific needs,
                            including detailed site evaluations and risk assessments to ensure maximum protection.</p>
                        <a href="contact.html" class="text-yellow-400 hover:text-yellow-500 font-medium">Request a
                            Quote</a>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800">Security & Guarding</h3>
                        <p class="text-gray-600 mb-4">Professional guarding services for facilities of all types, from
                            corporate offices to residential complexes, ensuring round-the-clock safety.</p>
                        <a href="contact.html" class="text-yellow-400 hover:text-yellow-500 font-medium">Request a
                            Quote</a>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                        </path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800">Specialized Security</h3>
                        <p class="text-gray-600 mb-4">Advanced security systems for high-risk environments like banks,
                            shopping malls, and towers, featuring cutting-edge technology and trained personnel.</p>
                        <a href="contact.html" class="text-yellow-400 hover:text-yellow-500 font-medium">Request a
                            Quote</a>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a2 2 0 012-2h2a2 2 0 012 2v5m-4 0h4">
                        </path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800">Construction Site Security</h3>
                        <p class="text-gray-600 mb-4">Tailored security solutions for construction projects, including
                            perimeter monitoring and asset protection to prevent theft and vandalism.</p>
                        <a href="contact.html" class="text-yellow-400 hover:text-yellow-500 font-medium">Request a
                            Quote</a>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800">VIP Protection</h3>
                        <p class="text-gray-600 mb-4">Elite protection services for high-profile individuals, offering
                            discreet, highly trained personnel and personalized security plans.</p>
                        <a href="contact.html" class="text-yellow-400 hover:text-yellow-500 font-medium">Request a
                            Quote</a>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg card-hover flex items-start space-x-6">
                    <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 005.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3 text-gray-800">Event Security</h3>
                        <p class="text-gray-600 mb-4">Comprehensive event security with advanced tools, crowd
                            management, and coordinated teams to ensure safety and smooth operations.</p>
                        <a href="contact.html" class="text-yellow-400 hover:text-yellow-500 font-medium">Request a
                            Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-indigo-900 to-gray-900 text-white py-24 text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-4xl font-bold mb-4">Secure Your Future with Royal Security</h2>
            <p class="text-lg mb-8">Contact us today to discuss your security needs and receive a tailored solution.
            </p>
            <a href="contact.html"
                class="btn-primary inline-block bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-500">Get
                Started</a>
        </div>
    </section>

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
