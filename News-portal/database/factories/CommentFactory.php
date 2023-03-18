<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\NewsPost;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'news_post_id' => NewsPost::factory(),
            'user_id' => User::factory(),
            'body' => $this->faker->paragraph,
        ];
    }
}
