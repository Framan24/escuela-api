<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Docentes;
use Illuminate\Database\Seeder;
use Whoops\Run;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $alumnos=new AlumnosSeeder;
        $alumnos->run();
        $asistencia= new AsistenciaSeeder;
        $asistencia->run();
        $cursos=new CursosSeeder;
        $cursos->run();
        $docentes=new DocentesSeeder;
        $docentes->run();
        $matricuala=new MatriculaSeeder;
        $matricuala->run();
    }
}
