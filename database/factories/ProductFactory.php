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
    public function definition(): array
    {
        return [
            'category_id' => rand(1, 5),
            'name' => [
                'uz' =>fake()->sentence(3),
                'ru' => 'перевод'
            ],
            'price' => rand(50000, 3000000),
            'description' => [
                'uz' => fake()->paragraph(5),
                'ru' => 'перевод'
            ]
        ];
    }
}
