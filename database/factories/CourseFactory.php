<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
  public function definition(): array
  {
    return [
      'name' => fake()->words(3, true),
      'description' => fake()->paragraph(),
      'start_date' => fake()->dateTimeBetween('now', '+3 months'),
      'end_date' => fake()->dateTimeBetween('+4 months', '+8 months'),
      'capacity' => fake()->numberBetween(10, 40),
    ];
  }
}
