<?php
namespace App\Http\Controllers;

use App\Models\Docentes;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function index(){
        return Docentes::all();
    }
    public function store(Request $request){
        $docentes= new Docentes();
        $docentes->nombre = $request->nombre;
        $docentes->apellido = $request->apdocentes;
        $docentes->correo = $request->correo;
        $docentes->save();
        return 'docente guardado';
    }
    public function update(Request $request,$id){
        $docentes = Docentes::find($id);
        $docentes->nombre = $request->nombre;
        $docentes->apellido = $request->apellido;
        $docentes->correo = $request->correo;
        $docentes->save();
        return ' docente actualizado';
    }
    public function delete($id){
        $docentes= Docentes::find($id);
        $docentes->delete();
        return 'docente eliminado';
    }
}
