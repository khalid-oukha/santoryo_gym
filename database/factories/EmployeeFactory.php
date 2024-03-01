<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cin' => $this->faker->unique()->regexify('PA[0-9]{6}'), // Moroccan CIN format
            'lastname' => $this->faker->lastName,
            'firstname' => $this->faker->firstName,
            'addresse' => $this->faker->address,
            'birthday' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'status' => $this->faker->randomElement(['active', 'inactive', 'on_leave', 'terminated']),
        ];
    }
}
