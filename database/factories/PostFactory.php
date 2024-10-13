<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => Str::slug(fake()->sentence()),
            'title' => fake()->sentence(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'image' => 'https://source.unsplash.com/1200/400/?' . fake()->word(),
            'content' => fake()->text(),
        ];
    }
}
