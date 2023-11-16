<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;
    // Relación con el modelo Curso
    public function curso()
    {
        return $this->belongsTo(Cursos::class, 'curso_id');
    }
    public function docente()
    {
        return $this->belongsTo(Docentes::class, 'docente_id');
    }
    public function alumno()
    {
        return $this->belongsTo(Alumnos::class, 'alumno_id');
    }
   
};
