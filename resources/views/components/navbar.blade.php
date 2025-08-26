<nav class="fixed top-0 left-0 w-full bg-gray-900/90 backdrop-blur-md shadow-md z-50">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between h-16">

        <!-- Logo -->
        <a href="/" class="flex items-center gap-2">
            <img src="/img/logo.png" alt="logo" class="w-8 h-8 rounded">
            <span class="font-bold text-yellow-400 text-lg">Royal Security</span>
        </a>

        <!-- Desktop Links -->
        <div class="hidden md:flex items-center gap-6">
            <a href="/" class="text-yellow-400 hover:text-yellow-600 transition" data-en="Home"
                data-ar="الرئيسية">Home</a>
            <a href="{{ route('service') }}" class="text-yellow-400 hover:text-yellow-600 transition" data-en="Services"
                data-ar="الخدمات">Services</a>
            <a href="{{ route('portfolio') }}" class="text-yellow-400 hover:text-yellow-600 transition"
                data-en="Portfolio" data-ar="المعرض">Portfolio</a>
            <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-600 transition" data-en="Contact"
                data-ar="اتصل بنا">Contact</a>
        </div>

        <!-- Right side -->
        <div class="flex items-center gap-4">
            <button id="lang-toggle"
                class="px-3 py-1 rounded-full border border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-gray-900 transition">
                {{ strtoupper(app()->getLocale()) }}
            </button>


            <!-- Hamburger (Mobile only) -->
            <button id="menu-btn" class="md:hidden flex flex-col gap-1.5">
                <span class="w-6 h-0.5 bg-yellow-400"></span>
                <span class="w-6 h-0.5 bg-yellow-400"></span>
                <span class="w-6 h-0.5 bg-yellow-400"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->

    <div id="mobile-menu"
        class="fixed top-0 right-0 w-64 h-full bg-gray-800 transform translate-x-full transition-transform duration-300 z-40 md:hidden">
        <div class="p-6 flex flex-col gap-6">
            <a href="/" class="text-yellow-400 hover:text-yellow-600 transition" data-en="Home"
                data-ar="الرئيسية">Home</a>
            <a href="{{ route('service') }}" class="text-yellow-400 hover:text-yellow-600 transition" data-en="Services"
                data-ar="الخدمات">Services</a>
            <a href="{{ route('portfolio') }}" class="text-yellow-400 hover:text-yellow-600 transition"
                data-en="Portfolio" data-ar="المعرض">Portfolio</a>
            <a href="{{ route('contact') }}" class="text-yellow-400 hover:text-yellow-600 transition" data-en="Contact"
                data-ar="اتصل بنا">Contact</a>
            <button id="mobile-lang"
                class="px-3 py-2 rounded-lg border border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-gray-900 transition">
                EN
            </button>
        </div>
    </div>

    <!-- Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-30" onclick="closeMenu()"></div>
</nav>
<script>
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileOverlay = document.getElementById("mobile-overlay");
    const langToggle = document.getElementById("lang-toggle");

    langToggle.addEventListener("click", () => {
        let newLang = "{{ app()->getLocale() }}" === "en" ? "ar" : "en";
        window.location.href = `${window.location.pathname}?lang=${newLang}`;
    });

    function toggleLang() {
    currentLang = currentLang === "EN" ? "AR" : "EN";
    langToggle.textContent = currentLang;
    document.documentElement.dir = currentLang === "AR" ? "rtl" : "ltr";

    document.querySelectorAll("[data-en][data-ar]").forEach(el => {
        el.textContent = el.getAttribute(`data-${currentLang.toLowerCase()}`);
    });
}


    const mobileLang = document.getElementById("mobile-lang");
    const menuLinks = document.querySelectorAll("a[data-en][data-ar]");
    let currentLang = "EN";

    // Toggle mobile menu and overlay
    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("translate-x-full");
        mobileOverlay.classList.toggle("hidden");
    });

    // Close mobile menu when overlay is clicked
    function closeMenu() {
        mobileMenu.classList.add("translate-x-full");
        mobileOverlay.classList.add("hidden");
    }

    // Toggle language
    function toggleLang() {
        currentLang = currentLang === "EN" ? "AR" : "EN";
        langToggle.textContent = currentLang;
        mobileLang.textContent = currentLang;
        document.documentElement.dir = currentLang === "AR" ? "rtl" : "ltr";

        // Update menu link text
        menuLinks.forEach(link => {
            link.textContent = link.getAttribute(`data-${currentLang.toLowerCase()}`);
        });
    }

    langToggle.addEventListener("click", toggleLang);
    mobileLang.addEventListener("click", toggleLang);
</script>
