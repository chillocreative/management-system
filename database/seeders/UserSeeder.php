<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'admin',
            'is_verified' => true,
        ]);

        // Create team members from dashboard
        User::create([
            'name' => 'Dale Komen',
            'email' => 'dale@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'user',
            'is_verified' => true,
        ]);

        User::create([
            'name' => 'Sofia Davis',
            'email' => 'sofia@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'user',
            'is_verified' => true,
        ]);

        User::create([
            'name' => 'Jackson Lee',
            'email' => 'jackson@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'user',
            'is_verified' => true,
        ]);

        User::create([
            'name' => 'Isabella Nguyen',
            'email' => 'isabella@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'user',
            'is_verified' => true,
        ]);

        User::create([
            'name' => 'Hugan Romex',
            'email' => 'hugan@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'user',
            'is_verified' => true,
        ]);

        // Create additional sample users
        User::create([
            'name' => 'Sarah Wilson',
            'email' => 'sarah@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'user',
            'is_verified' => true,
        ]);

        User::create([
            'name' => 'Michael Chen',
            'email' => 'michael@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'user',
            'is_verified' => true,
        ]);

        User::create([
            'name' => 'Emily Rodriguez',
            'email' => 'emily@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'user',
            'is_verified' => true,
        ]);

        User::create([
            'name' => 'David Thompson',
            'email' => 'david@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'user',
            'is_verified' => true,
        ]);

        User::create([
            'name' => 'Lisa Anderson',
            'email' => 'lisa@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'user',
            'is_verified' => true,
        ]);

        // Create some unverified users for testing
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => null,
            'role' => 'user',
            'is_verified' => false,
        ]);

        $this->command->info('Users seeded successfully!');
        $this->command->info('Default password for all users: password');
        $this->command->info('Admin user: john@example.com');
    }
}
