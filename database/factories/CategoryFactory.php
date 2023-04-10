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
        $names = ['Italian cuisine', 'Indian cuisine', 'Mexican cuisine', 'Continental cuisine', 'Thai cuisine', 'Chinese cuisine', 'Mughlai cuisine', 'Japanese cuisine', 'Vietnamese cuisine', 'Vegan cuisine', 'Greek cuisine', 'Malian cuisine', 'Native American cuisine', 'Latin American cuisine', 'Canadian cuisine', 'Cuisine of New England', 'Southern American cuisine', 'French Guianan cuisine'];
        return [
            //
            'name' => fake()->randomElement($names),
            'description' => fake()->sentence(),
            'thumbnail_photo' => fake()->randomElement($defaultPhotos)
        ];
    }
}
