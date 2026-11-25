<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
  public function definition(): array
  {
    return [
      'name' => fake()->firstName(),
      'surname' => fake()->lastName(),
      'email' => fake()->unique()->safeEmail(),
      'phone' => fake()->phoneNumber(),
      'date_of_birth' => fake()->date(),
    ];
  }
}
