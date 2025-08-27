<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    protected $signature = 'admin:create';
    protected $description = 'Create a default admin user for Filament';

    public function handle()
    {
        $email = 'admin@gmail.com';
        $password = '1234'; // غيرها حسب رغبتك

        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Admin',
                'password' => Hash::make($password),
                'is_admin' => true // إذا عندك العمود موجود
            ]
        );

        $this->info("Admin user created or updated successfully!");
        $this->info("Email: $email | Password: $password");
    }
}
