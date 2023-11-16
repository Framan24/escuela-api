<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index(){
       
        $matriculas = Matricula::with('curso','docente','alumno')->get();
        return $matriculas;
    }
   
}
