<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // تحقق إذا المستخدم موجود مسبقًا
        if (!User::where('email', 'admin@gmail.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1234'), // غيرها لكلمة سر قوية
                // 'is_admin' => true, // إذا عندك عمود يميز المشرفين
            ]);
        }
    }
}
