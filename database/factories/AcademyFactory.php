<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Academy>
 */
class AcademyFactory extends Factory
{
  public function definition(): array
  {
    return [
      'name' => fake()->company() . ' Academy',
      'description' => fake()->paragraph(),
      'address' => fake()->address(),
      'phone' => fake()->phoneNumber(),
      'email' => fake()->unique()->companyEmail(),
    ];
  }
}
