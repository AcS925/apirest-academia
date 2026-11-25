<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Academy;
use App\Models\Course;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    // Crear 3 usuarios
    $users = User::factory(3)->create();

    // Crear academias para cada usuario
    foreach ($users as $user) {

      $academies = Academy::factory(2)
        ->for($user)
        ->create();

      // Crear cursos para cada academia
      foreach ($academies as $academy) {

        Course::factory(2)
          ->for($academy)
          ->create();
      }
    }

    // Crear 20 estudiantes
    $students = Student::factory(20)->create();

    // Obtener todos los cursos
    $courses = Course::all();

    // Matricular estudiantes en los cursos
    foreach ($courses as $course) {

      $selectedStudents = $students->random(
        rand(2, 5)
      );

      $enrollments = [];

      foreach ($selectedStudents as $student) {
        $enrollments[$student->id] = [
          'enrolled_at' => fake()->date(),
        ];
      }

      $course->students()->attach($enrollments);
    }
  }
}
