<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // إنشاء مستخدم Admin إذا لم يكن موجود مسبقًا
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'], // المفتاح الفريد
            [
                'name' => 'Rs',
                'password' => Hash::make('33840'),
                'is_admin' => true, // تأكد أن العمود موجود بالمراجعة
            ]
        );

        // لا ترسل Verification Email الآن
    }
}
