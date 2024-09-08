<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        $categories = ['white', 'black', 'silver', 'gold'];

        return [
            'product_title' => Str::ucfirst(fake()->unique()->words(6, true)),
            'product_short_description' => fake()->text(200),
            'product_full_description' => fake()->text(500),
            'product_price' => fake()->numberBetween(300, 500),
            'product_quantity' => 50,
            'product_image_path' => '/images/products/',
            'product_image' => 'iphone1-'.fake()->numberBetween(1, 4).'.jpg',
            'product_category' => $categories[fake()->numberBetween(0, sizeof($categories) - 1)],
            'product_group' => 'default',
            'created_at' => now(),
        ];
    }
}
