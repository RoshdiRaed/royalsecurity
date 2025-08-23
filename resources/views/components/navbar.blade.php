<nav class="bg-gradient-to-r from-gray-900 to-gray-800 text-white shadow-xl fixed top-0 w-full z-50 transition-all duration-300" data-aos="fade-down">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo Section -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2 group">
                <span class="text-3xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600">Royal</span>
                <span class="text-3xl font-bold text-white transition-colors duration-300 group-hover:text-yellow-400">Security</span>
            </a>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-8 space-x-reverse">
                @foreach([
                    ['route' => 'home', 'en' => 'Home', 'ar' => 'الرئيسية'],
                    ['route' => 'service', 'en' => 'Services', 'ar' => 'الخدمات'],
                    ['route' => 'contact', 'en' => 'Contact', 'ar' => 'اتصل بنا'],
                ] as $link)
                    <a href="{{ route($link['route']) }}"
                       class="nav-link relative px-3 py-2 font-semibold transition-colors duration-300 hover:text-yellow-400
                              before:content-[''] before:absolute before:bottom-0 before:left-0 before:w-0 before:h-0.5
                              before:bg-yellow-400 before:transition-all before:duration-300 hover:before:w-full"
                       data-en="{{ $link['en'] }}"
                       data-ar="{{ $link['ar'] }}">
                        {{ $link[app()->getLocale()] ?? $link['en'] }}
                    </a>
                @endforeach
            </div>

            <!-- Right Side Elements -->
            <div class="hidden md:flex items-center space-x-6 space-x-reverse">
                <!-- Phone Number -->
                <a href="tel:+970-59-999999" class="group flex items-center text-yellow-400 hover:text-yellow-300 transition-colors duration-300">
                    <span class="relative inline-flex">
                        <svg class="w-5 h-5 mr-2 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </span>
                    <span dir="ltr" class="font-medium tracking-wide group-hover:translate-x-1 transition-transform duration-300">
                        +970-59-999999
                    </span>
                </a>

                <!-- Language Toggle -->
                <button id="lang-toggle"
                        class="px-4 py-2 text-sm font-bold text-yellow-400 border border-yellow-400 rounded-full
                               hover:bg-yellow-400 hover:text-gray-900 transition-all duration-300 uppercase">
                    {{ app()->getLocale() === 'ar' ? 'EN' : 'AR' }}
                </button>
            </div>
        </div>
    </div>
</nav>
