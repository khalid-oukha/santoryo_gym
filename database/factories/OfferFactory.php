<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true), // Generates a random title
            'description' => $this->faker->sentence(), // Generates a random sentence for the description
            'price' => $this->faker->randomFloat(2, 10, 100), // Generates a random price between 10.00 and 100.00
            'months_valid' => $this->faker->numberBetween(1, 12),
        ];
    }
}
