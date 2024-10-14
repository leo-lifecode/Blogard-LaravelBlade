<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([CategorySeeder::class, UserSeeder::class]);
        // Post::factory(20)
        //     ->recycle([Category::all(), User::all()])
        //     ->create();

        User::insert([
            'name' => 'user',
            'username' => 'userbaru',
            'email' => 'userbaru@gmail.com',
            'password' => bcrypt('user12345'),
            'is_admin' => false,
            'avatar' => 'https://via.placeholder.com/50',
            'bio' => 'user baru dibuat',
            'email_verified_at' => now(),]);
    }
}
