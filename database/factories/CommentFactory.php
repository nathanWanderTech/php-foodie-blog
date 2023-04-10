<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $authorIds = User::pluck('id')->all();
        $postIds = Post::pluck('id')->all();
        return [
            'content' => fake()->sentence(rand(100, 150)),
            'author_id' => fake()->randomElement($authorIds),
            'post_id' => fake()->randomElement($postIds),
        ];
    }
}
