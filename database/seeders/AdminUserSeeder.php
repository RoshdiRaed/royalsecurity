<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // المفتاح الفريد
            [
                'name' => 'Admin',
                'password' => Hash::make('1234'), // غيّرها لكلمة سر تريدها
                'is_admin' => true, // تأكد أن هذا العمود موجود في الجدول
            ]
        );
    }
}
