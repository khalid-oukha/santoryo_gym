<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('-1 month', '+1 month');
        $endDate = (clone $startDate)->modify('+1 year'); // Example end date, 1 year after start date

        return [
            'offer_id' => Offer::factory(), // Assumes you have an Offer factory
            'user_id' => User::factory(), // Assumes you have a User factory
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
    }
}
