<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Programming',
            'slug' => Str::slug('programming'),

        ]);

        DB::table('categories')->insert([
            'name' => 'News',
            'slug' => Str::slug('news'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Technology',
            'slug' => Str::slug('technology'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Society',
            'slug' => Str::slug('society'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Healthy',
            'slug' => Str::slug('healthy'),
        ]);
    }
}
