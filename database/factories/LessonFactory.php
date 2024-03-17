<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Coach;
use App\Models\Coashe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $coachId = Coach::inRandomOrder()->first()?->id ?? null;

        return [
            'title' => $this->faker->sentence(3),
            'coach_id' => $coachId, // Use an existing coach's user_id
            'category_id' => Category::factory(), // Assumes you have a Category factory
            'duration' => $this->faker->numberBetween(30, 120),
            'price' => $this->faker->randomFloat(2, 5, 100),
            'status' => $this->faker->randomElement(['planned', 'completed', 'canceled']),
            'description' => $this->faker->paragraph(),
        ];
    }
}
