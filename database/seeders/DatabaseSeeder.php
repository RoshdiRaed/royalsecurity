<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Portfolio;
use App\Models\About;
use App\Models\ContactInfo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'title_en' => 'Comprehensive Security',
            'title_ar' => 'الأمن الشامل',
            'description_en' => 'Customized security plans with detailed site assessments.',
            'description_ar' => 'خطط أمنية مخصصة مع تقييمات مفصلة للموقع.',
            'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        ]);

        Testimonial::create([
            'name_en' => 'Ahmed Khalil',
            'name_ar' => 'أحمد خليل',
            'position_en' => 'Director, Global NGO',
            'position_ar' => 'مدير، منظمة غير حكومية عالمية',
            'content_en' => 'Royal Security provided exceptional protection for our regional offices. Their professionalism and attention to detail are unmatched.',
            'content_ar' => 'قدمت رويال للأمن حماية استثنائية لمكاتبنا الإقليمية. احترافيتهم واهتمامهم بالتفاصيل لا مثيل لهما.',
            'rating' => 5,
        ]);

        Portfolio::create([
            'title_en' => 'Security System Integration',
            'title_ar' => 'تكامل أنظمة الأمان',
            'description_en' => 'A comprehensive security solution for commercial buildings, integrating CCTV, alarms, and access control.',
            'description_ar' => 'حل أمان شامل للمباني التجارية، يتضمن كاميرات المراقبة، الأجهزة الإنذارية، والتحكم بالوصول.',
            'image' => 'portfolio/15.jpg',
        ]);

        About::create([
            'title_en' => 'Tailored Security Solutions for Global Partners',
            'title_ar' => 'حلول أمنية مخصصة للشركاء العالميين',
            'description_en' => 'We provide comprehensive security services to protect our clients and their international operations with precision and trust.',
            'description_ar' => 'نحن نقدم خدمات أمنية شاملة لحماية عملائنا وعملياتهم الدولية بدقة وثقة.',
            'image' => 'about/logo.png',
        ]);

        ContactInfo::create([
            'address_en' => 'Gaza Strip, Palestine',
            'address_ar' => 'قطاع غزة، فلسطين',
            'phone' => '059999999',
            'email' => 'info@royalsecurity.ps',
            'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
        ]);
    }
}
