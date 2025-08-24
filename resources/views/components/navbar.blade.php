<nav class="bg-gradient-to-r from-gray-900 to-gray-800 text-white shadow-xl fixed top-0 w-full z-50 transition-all duration-300"
    data-aos="fade-down">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo Section -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2 group" aria-label="Royal Security Home">
                <span
                    class="text-3xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600">Royal</span>
                <span
                    class="text-3xl font-bold text-white transition-colors duration-300 group-hover:text-yellow-400">Security</span>
            </a>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn"
                    class="text-yellow-400 hover:text-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-400 rounded"
                    aria-label="Toggle navigation menu" aria-expanded="false">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                        <path class="close-icon hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex space-x-8 space-x-reverse">
                @foreach ([['route' => 'home', 'en' => 'Home', 'ar' => 'الرئيسية'], ['route' => 'service', 'en' => 'Services', 'ar' => 'الخدمات'], ['route' => 'portfolio', 'en' => 'Portfolio', 'ar' => 'معرض الأعمال'], ['route' => 'contact', 'en' => 'Contact', 'ar' => 'اتصل بنا']] as $link)
                    <a href="{{ route($link['route']) }}"
                        class="nav-link relative px-3 py-2 font-semibold transition-colors duration-300 hover:text-yellow-400
                              before:content-[''] before:absolute before:bottom-0 before:left-0 before:w-0 before:h-0.5
                              before:bg-yellow-400 before:transition-all before:duration-300 hover:before:w-full"
                        data-en="{{ $link['en'] }}" data-ar="{{ $link['ar'] }}"
                        aria-current="{{ Route::currentRouteName() === $link['route'] ? 'page' : 'false' }}">
                        {{ $link[app()->getLocale()] ?? $link['en'] }}
                    </a>
                @endforeach
            </div>

            <!-- Desktop Right Side Elements -->
            <div class="hidden md:flex items-center space-x-6 space-x-reverse">
                <!-- Phone Number -->
                <a href="tel:+970-59-999999"
                    class="group flex items-center text-yellow-400 hover:text-yellow-300 transition-colors duration-300"
                    aria-label="Call us at +970-59-999999">
                    <span class="relative inline-flex">
                        <svg class="w-5 h-5 mr-2 animate-pulse" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </span>
                    <span dir="ltr"
                        class="font-medium tracking-wide group-hover:translate-x-1 transition-transform duration-300">
                        +970-59-999999
                    </span>
                </a>

                <!-- Language Toggle -->
                <button id="lang-toggle"
                    class="px-4 py-2 text-sm font-bold text-yellow-400 border border-yellow-400 rounded-full
                               hover:bg-yellow-400 hover:text-gray-900 transition-all duration-300 uppercase"
                    aria-label="Toggle language">
                    {{ app()->getLocale() === 'ar' ? 'EN' : 'AR' }}
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-2 pt-2 pb-3 space-y-1">
            @foreach ([['route' => 'home', 'en' => 'Home', 'ar' => 'الرئيسية'], ['route' => 'service', 'en' => 'Services', 'ar' => 'الخدمات'], ['route' => 'portfolio', 'en' => 'Portfolio', 'ar' => 'معرض الأعمال'], ['route' => 'contact', 'en' => 'Contact', 'ar' => 'اتصل بنا']] as $link)
                <a href="{{ route($link['route']) }}"
                    class="nav-link block px-3 py-2 text-lg font-semibold transition-colors duration-300 hover:text-yellow-400"
                    data-en="{{ $link['en'] }}" data-ar="{{ $link['ar'] }}"
                    aria-current="{{ Route::currentRouteName() === $link['route'] ? 'page' : 'false' }}">
                    {{ $link[app()->getLocale()] ?? $link['en'] }}
                </a>
            @endforeach
            <a href="tel:+970-59-999999"
                class="group block px-3 py-2 text-yellow-400 hover:text-yellow-300 transition-colors duration-300"
                aria-label="Call us at +970-59-999999">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-2 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                    </svg>
                    <span dir="ltr" class="font-medium tracking-wide">+970-59-999999</span>
                </span>
            </a>
            <div class="px-3 py-2">
                <button id="lang-toggle-mobile"
                    class="w-full px-4 py-2 text-sm font-bold text-yellow-400 border border-yellow-400 rounded-full
                               hover:bg-yellow-400 hover:text-gray-900 transition-all duration-300 uppercase"
                    aria-label="Toggle language">
                    {{ app()->getLocale() === 'ar' ? 'EN' : 'AR' }}
                </button>
            </div>
        </div>
    </div>
</nav>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Existing mobile menu toggle code
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.querySelector('.menu-icon');
        const closeIcon = document.querySelector('.close-icon');

        mobileMenuBtn.addEventListener('click', function() {
            const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
            mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);
        });

        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
            });
        });

        // Language toggle functionality
        const langToggleButtons = document.querySelectorAll('#lang-toggle, #lang-toggle-mobile');
        langToggleButtons.forEach(button => {
            button.addEventListener('click', function() {
                const currentLocale = '{{ app()->getLocale() }}';
                const newLocale = currentLocale === 'ar' ? 'en' : 'ar';

                fetch('/set-locale/' + newLocale, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector(
                                'meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Update navigation link text
                            document.querySelectorAll('.nav-link').forEach(link => {
                                const enText = link.getAttribute('data-en');
                                const arText = link.getAttribute('data-ar');
                                link.textContent = newLocale === 'ar' ? arText :
                                    enText;
                            });

                            // Update button text
                            langToggleButtons.forEach(btn => {
                                btn.textContent = newLocale === 'ar' ? 'EN' : 'AR';
                            });

                            // Update text direction
                            document.body.setAttribute('dir', newLocale === 'ar' ? 'rtl' :
                                'ltr');

                            // Reload to ensure full page content updates
                            window.location.reload();
                        } else {
                            console.error('Locale change failed:', data.error);
                        }
                    })
                    .catch(error => console.error('Error changing locale:', error));
            });
        });
    });
</script>

<!-- Fallback for no JavaScript -->
<noscript>
    <style>
        #mobile-menu-btn {
            display: none;
        }

        #mobile-menu {
            display: block;
        }
    </style>
</noscript>
