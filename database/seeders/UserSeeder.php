<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'aselole@gmail.com',
            'password' => Hash::make('admin123'),
            'is_admin' => true,
            'avatar' => 'https://via.placeholder.com/50',
            'bio' => 'Admin',
            'email_verified_at' => now(),
            
        ]);

        // User::factory(3)->create();
    }
}
