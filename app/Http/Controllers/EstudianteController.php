<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //
    public function index(Request $request){
       echo Estudiante::all();
    }
    public function show(Estudiante $estudiante){
        echo $estudiante;
    }

    public function store (Request $request){
        $estudiante = new Estudiante();
        $estudiante->nombres=$request->nombres;
        $estudiante->edad=$request->edad;
        $estudiante->save();
        echo $estudiante;
    }

    public function update (Request $request, Estudiante $estudiante){
        $estudiante->nombres=$request->nombres;
        $estudiante->edad=$request->edad;
        $estudiante->update();
        echo $estudiante;
    }

    public function destroy(Estudiante $estudiante){
        $estudiante->delete();
        echo "Se elimino correctamente";
    }
}
