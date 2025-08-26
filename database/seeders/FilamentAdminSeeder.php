<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FilamentAdminSeeder extends Seeder
{
    public function run()
    {
        $email = 'roshdi@gmail.com';

        $user = User::firstOrCreate(
            ['email' => $email], // تحقق إذا موجود
            [
                'name' => 'Rs',
                'password' => Hash::make('33840'),
                'is_admin' => true,
            ]
        );
    }
}
