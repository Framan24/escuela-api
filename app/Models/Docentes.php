<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    use HasFactory;
    public function matricula(){
        return $this->belongsToMany(Matricula::class,'docente_id');
    }
}
