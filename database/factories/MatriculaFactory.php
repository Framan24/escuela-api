<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'curso_id'=>fake()->numberBetween(1,5),
            'docente_id'=>fake()->numberBetween(1,10),
            'alumno_id'=>fake()->numberBetween(1,20)
        ];
    }
}
