<footer class="bg-gray-900 text-gray-300 py-16 overflow-x-hidden">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-12">
        <div>
            <h3 class="text-xl font-bold text-white mb-4" data-en="Royal Security" data-ar="رويال سيكيوريتي">Royal Security</h3>
            <p class="text-gray-400" data-en="The premier choice for international institutions in the Gaza Strip, delivering trusted security solutions." data-ar="الخيار الأول للمؤسسات الدولية في قطاع غزة، يقدم حلول أمنية موثوقة.">
                The premier choice for international institutions in the Gaza Strip, delivering trusted security solutions.
            </p>
        </div>
        <div>
            <h3 class="text-xl font-bold text-white mb-4" data-en="Quick Links" data-ar="روابط سريعة">Quick Links</h3>
            <ul class="space-y-3">
                <li><a href="about.html" class="footer-link hover:text-yellow-400" data-en="About Us" data-ar="معلومات عنا">About Us</a></li>
                <li><a href="{{ route('service') }}" class="footer-link hover:text-yellow-400" data-en="Services" data-ar="الخدمات">Services</a></li>
                <li><a href="{{ route('contact') }}" class="footer-link hover:text-yellow-400" data-en="Contact" data-ar="اتصل بنا">Contact</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-xl font-bold text-white mb-4" data-en="Contact Us" data-ar="اتصل بنا">Contact Us</h3>
            <p class="text-gray-400" data-en="Gaza Strip" data-ar="قطاع غزة">Gaza Strip</p>
            <p class="text-gray-400">Phone: <a href="tel:+970-59-999999" class="hover:text-yellow-400">059999999</a></p>
            <p class="text-gray-400">Email: <a href="mailto:info@royalsecurity.ps" class="hover:text-yellow-400">info@royalsecurity.ps</a></p>
        </div>
        <div>
            <h3 class="text-xl font-bold text-white mb-4" data-en="Follow Us" data-ar="تابعنا">Follow Us</h3>
            <div class="flex space-x-4 space-x-reverse">
                <!-- social icons -->
            </div>
        </div>
    </div>
    <div class="text-center text-sm text-gray-500 mt-12" data-en="&rArr; &copy; {{ date('Y') }} Royal Security. All rights reserved." data-ar="&lArr; &copy; {{ date('Y') }} رويال سيكيوريتي. جميع الحقوق محفوظة. &rArr;">
        &rArr; &copy; {{ date('Y') }} Royal Security. All rights reserved.
    </div>
</footer>
