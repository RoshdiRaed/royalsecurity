<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'admin@gmail.com';
        $password = '1234'; // غيره حسب رغبتك

        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('1234'),
                'is_admin' => 1,
            ]
        );

        $this->command->info("Admin user created or updated successfully!");
        $this->command->info("Email: $email | Password: $password");
    }
}
