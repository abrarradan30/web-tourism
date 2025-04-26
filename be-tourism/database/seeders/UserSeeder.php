<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin User
        User::create([
            'name' => 'tester',
            'email' => 'tester@gamil.com',
            'password' => Hash::make('tester'), // Ganti dengan password aman
            'email_verified_at' => now(),
        ]);

        // Dummy Users
        User::factory()->create();
    }
}
