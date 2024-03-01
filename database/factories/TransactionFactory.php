<?php

namespace Database\Factories;

use App\Models\Manager;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            $managerId = Manager::inRandomOrder()->first()->user_id ?? null;

        return [
            'manager_id' => $managerId, // Generate a Manager for each transaction or use existing ones.
            'amount' => $this->faker->randomFloat(2, 50, 1000), // Example amount between 50 and 1000
            'description' => $this->faker->sentence,
            'transaction_date' => $this->faker->date,
            'due_date' => $this->faker->optional()->date, // 50% chance of being null
            'status' => $this->faker->randomElement(['pending', 'completed']),
        ];
    }
}
