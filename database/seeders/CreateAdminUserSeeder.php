<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'roshdi@gmail.com'],
            [
                'name' => 'rohdi',
                'password' => Hash::make('1234'),
                'is_admin' => true, 
            ]
        );

        $this->command->info('✅ Admin user created successfully!');
    }
}
