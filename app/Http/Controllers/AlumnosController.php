<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index(){
        return Alumnos::all();
    }
    public function store(Request $request){
        $alumnos= new Alumnos();
        $alumnos->nombre = $request->nombre;
        $alumnos->apellido = $request->apellido;
        $alumnos->correo = $request->correo;
        $alumnos->save();
        return 'alumnos guardado';
    }
    public function update(Request $request,$id){
        $alumnos = Alumnos::find($id);
        $alumnos->nombre = $request->nombre;
        $alumnos->apellido = $request->apellido;
        $alumnos->correo = $request->correo;
        $alumnos->save();
        return ' alumno actualizados';
    }
    public function delete($id){
        $alumnos= Alumnos::find($id);
        $alumnos->delete();
        return 'alumno eliminado';
    }
}
