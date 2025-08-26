<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FilamentAdminSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => 'Rs',
            'email' => 'roshdi013@gmail.com',
            'password' => Hash::make('33840'),
            'is_admin' => true, // إذا عندك حقل صلاحية
        ]);

        // إرسال بريد التحقق
        $user->sendEmailVerificationNotification();
    }
}
