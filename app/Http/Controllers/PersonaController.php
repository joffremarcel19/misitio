<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index(Request $request)
    {
        echo Persona::all();
    }
    public function show(Persona $persona)
    {
        echo $persona;
    }

    public function buscapersona($cedula)
    {
        $persona = Persona::where('cedula', $cedula)->first();
        if ($persona) {
            return response()->json(['mensaje' => 'Persona no encontrada']);
        }
        return response()->json($persona);
    }

    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->cedula = $request->cedula;
        $persona->nombres = $request->nombres;
        $persona->apellidos = $request->apellidos;
        $persona->email = $request->email;
        $persona->telefono = $request->telefono;
        $persona->save();
        echo $persona;
    }

    public function update(Request $request, Persona $persona)
    {
        $persona->cedula = $request->cedula;
        $persona->nombres = $request->nombres;
        $persona->apellidos = $request->apellidos;
        $persona->email = $request->email;
        $persona->telefono = $request->telefono;
        $persona->update();
        echo $persona;
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        echo "Se elimino correctamente";
    }
}
