<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    public function matricula(){
        return $this->belongsToMany(Matricula::class,'alumno_id');
    }
    public function asistencia(){
        return $this->belongsToMany(Asistencia::class,'alumno_id');
    }
}
