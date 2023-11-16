<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index(){
        $asistencia = Asistencia::with('alumno')->get();
        return $asistencia;
    }
}
