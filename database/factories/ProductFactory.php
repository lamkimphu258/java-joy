<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = implode(' ', fake()->unique()->words());

        return [
            'title' => $title,
            'description' => fake()->realTextBetween(100, 150),
            'thumbnail' => 'images/product-thumbnail-' . random_int(1, 3) . '.png',
            'price' => fake()->randomFloat(min: 20.0, max: 100.0, nbMaxDecimals: 2),
            'slug' => Str::slug($title),
        ];
    }
}
