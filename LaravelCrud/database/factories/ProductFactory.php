<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' =>fake()->sentence(5),
            'description' =>fake()->sentence(5),
            'price' =>fake()->randomFloat(2, 1, 100),
            'image' =>fake()->imageUrl(640, 480, 'cats', true, 'Faker'),


        ];

    }
}
