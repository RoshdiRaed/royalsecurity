<nav class="bg-gray-900 text-white shadow-lg fixed top-0 w-full z-50" data-aos="fade-down">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <a href="{{ route('home') }}" class="text-3xl font-bold text-yellow-400 tracking-tight">Royal<span class="text-white">Security</span></a>
            <div class="hidden md:flex space-x-8 space-x-reverse text-base font-semibold">
                <a href="{{ route('home') }}" class="nav-link hover:text-yellow-400" data-en="Home" data-ar="الرئيسية">Home</a>
                <a href="{{ route('service') }}" class="nav-link hover:text-yellow-400" data-en="Services" data-ar="الخدمات">Services</a>
                <a href="{{ route('contact') }}" class="nav-link hover:text-yellow-400" data-en="Contact" data-ar="اتصل بنا">Contact</a>
            </div>
            <div class="hidden md:flex items-center space-x-4 space-x-reverse">
                <a href="tel:+970-59-999999" class="flex items-center text-yellow-400 hover:text-yellow-300 phone-number">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span dir="ltr">+970-59-8546924</span>
                </a>
                <button id="lang-toggle" class="text-sm text-yellow-400 hover:text-yellow-300 uppercase">{{ app()->getLocale() === 'ar' ? 'EN' : 'AR' }}</button>
            </div>
        </div>
    </div>
</nav>
