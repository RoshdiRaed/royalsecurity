document.addEventListener('DOMContentLoaded', () => {
    // Initialize language from localStorage or default to 'en'
    let isArabic = localStorage.getItem('language') === 'ar';
    document.documentElement.setAttribute('lang', isArabic ? 'ar' : 'en');
    document.body.setAttribute('dir', isArabic ? 'rtl' : 'ltr');

    // Update language toggle button text
    const langToggle = document.getElementById('lang-toggle');
    if (langToggle) {
        langToggle.textContent = isArabic ? 'EN' : 'AR';
    }

    // Update all translatable elements
    function updateLanguage() {
        document.querySelectorAll('[data-en][data-ar]').forEach(element => {
            element.textContent = isArabic ? element.dataset.ar : element.dataset.en;
        });

        // Update the title
        const title = document.querySelector('title');
        if (title && title.dataset.ar && title.dataset.en) {
            title.textContent = isArabic ? title.dataset.ar : title.dataset.en;
        }
    }

    // Apply language on initial load
    updateLanguage();

    // Language toggle functionality
    if (langToggle) {
        langToggle.addEventListener('click', () => {
            isArabic = !isArabic;
            localStorage.setItem('language', isArabic ? 'ar' : 'en');
            document.documentElement.setAttribute('lang', isArabic ? 'ar' : 'en');
            document.body.setAttribute('dir', isArabic ? 'rtl' : 'ltr');
            langToggle.textContent = isArabic ? 'EN' : 'AR';
            updateLanguage();
        });
    }

    // Sidebar Toggle (for services page)
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('sidebar-toggle');
    if (sidebar && toggleButton) {
        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('sidebar-hidden');
        });
    }

    // Modal Toggle (for services page)
    const addServiceModal = document.getElementById('addServiceModal');
    const openAddServiceModal = document.getElementById('openAddServiceModal');
    const closeAddServiceModal = document.getElementById('closeAddServiceModal');
    if (addServiceModal && openAddServiceModal && closeAddServiceModal) {
        openAddServiceModal.addEventListener('click', () => {
            addServiceModal.classList.remove('hidden');
        });

        closeAddServiceModal.addEventListener('click', () => {
            addServiceModal.classList.add('hidden');
        });

        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Service saved! (Placeholder)');
            addServiceModal.classList.add('hidden');
        });
    }
});
