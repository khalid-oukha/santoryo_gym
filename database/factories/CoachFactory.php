<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coashe>
 */
class CoachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => \App\Models\User::factory(),
            'cin' => $this->faker->regexify('PA[0-9]{6}'), // Moroccan CIN format
            'specialization' => $this->faker->randomElement(['Football', 'Basketball', 'Swimming', 'Athletics']),
            'description' => $this->faker->paragraph(),
        ];

    }
}
