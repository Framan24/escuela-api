<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){
        return Cursos::all();
    }
    public function store(Request $request){
        $curso= new Cursos();
        $curso->curso = $request->curso;
        $curso->save();
        return 'curso guardado';
    }
    public function update(Request $request,$id){
        $curso = Cursos::find($id);
        $curso->curso = $request->curso;
        $curso->save();
        return ' curso actualizado';
    }
    public function delete($id){
        $curso= Cursos::find($id);
        $curso->delete();
        return 'curso eliminado';
    }
}
