<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function create(){
        return view('personas.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255'

        ]);

        $persona = new Persona();
        $persona->nombre = $validatedData['nombre'];
        $persona->apellido_paterno = $validatedData['apellido_paterno'];
        $persona->apellido_materno = $validatedData['apellido_materno'];

        $persona->save();
        return redirect()->route('personas.index')->with('success', 'Datos insertados correctamente');
    }

    public function edit($id){

          // Encuentra el registro que se desea editar
          $personas = Persona::findOrFail($id);

          // Pasa el registro a la vista de edición
          return view('personas.edit', compact('personas'));

    }

    public function update(Request $request,$id){

                // Encuentra el registro que deseas actualizar
                $personas = Persona::findOrFail($id);

                // Valida los datos del formulario
                $validatedData = $request->validate([
                    'nombre' => 'required|string|max:255',
                    'apellido_paterno' => 'required|string|max:255',
                    'apellido_materno' => 'required|string|max:255',

                ]);

                // Asigna los valores validados al modelo
                $personas->nombre = $validatedData['nombre'];
                $personas->apellido_paterno = $validatedData['apellido_paterno'];
                $personas->apellido_materno = $validatedData['apellido_materno'];

                // Guarda los cambios en la base de datos
                $personas->save();

                // Redirige con un mensaje de éxito
                return redirect()->route('personas.index')->with('success', 'Datos actualizados correctamente');

    }

    public function destroy($id){

        $personas = Persona::findOrFail($id);

        // Elimina el registro
        $personas->delete();

        // Redirige con un mensaje de éxito
        return redirect()->route('personas.index')->with('success', 'Datos eliminados correctamente');
        // dd($request);

    }
}
