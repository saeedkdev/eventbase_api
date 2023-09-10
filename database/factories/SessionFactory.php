<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Session>
 */
class SessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'start_time' => $this->faker->dateTimeBetween('now', '+1 week'),
            // end time is 1-2 hours after start time
            'end_time' => $this->faker->dateTimeBetween('+1 hour', '+2 hour'),
            'date' => $this->faker->dateTimeBetween('now', '+1 week'),
            'location' => $this->faker->randomElement(['Room 1', 'Room 2', 'Room 3']),
            'speakers' => $this->faker->name(),
            'session_type' => $this->faker->randomElement(['Keynote', 'Breakout', 'Lunch', 'Closing']),
        ];
    }
}
