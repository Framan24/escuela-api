<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cursos>
 */
class CursosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $materias=['matematica','programacion','tecnologia','informatica','historia','ingles','algebra','trigonometria'];
        $numero= rand(0,7);
        return [
            'curso'=>$materias[$numero],

        ];
    }
}
