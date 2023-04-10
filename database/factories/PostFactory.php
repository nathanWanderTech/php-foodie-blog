<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        $authorIds = User::pluck('id')->all();;
        $categoryIds = Category::pluck('id')->all();
        $url = 'https://cle.scweb.ca/php-final-project/images/categories/categories-post/';
        $defaultPhotos = ['cp-1.jpg', 'cp-1.jpg', 'cp-3.jpg', 'cp-4.jpg', 'cp-5.jpg', 'cp-6.jpg', 'cp-7.jpg', 'cp-8.jpg'];
        return [
            'title' => fake()->sentence(10),
            'content' => fake()->sentence(130),
            'author_id' => fake()->randomElement($authorIds),
            'category_id' => fake()->randomElement($categoryIds),
            'thumbnail_photo' => $url . fake()->randomElement($defaultPhotos)
        ];
    }
}
