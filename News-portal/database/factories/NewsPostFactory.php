<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsPost>
 */
class NewsPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'excerpt' => '<p>' . implode('</p><p>',fake()->paragraphs(2)) . '</p>',
            'body' => '<p>' . implode('</p><p>',fake()->paragraphs(6)) . '</p>',

        ];
    }
}
