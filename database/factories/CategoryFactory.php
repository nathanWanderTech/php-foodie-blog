<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $defaultPhotos = ['cp-1.jpg', 'cp-1.jpg', 'cp-3.jpg', 'cp-4.jpg', 'cp-5.jpg', 'cp-6.jpg', 'cp-7.jpg', 'cp-8.jpg'];
        $names = ['Italian', 'Indian', 'Mexican', 'Continental', 'Thai', 'Chinese', 'Mughlai', 'Japanese', 'Vietnamese', 'Vegan', 'Greek'];
        return [
            //
            'name' => fake()->randomElement($names),
            'description' => fake()->sentence(),
            'thumbnail_photo' => fake()->randomElement($defaultPhotos)
        ];
    }
}
