<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCuidadorRequest;
use App\Http\Requests\UpdateCuidadorRequest;
use App\Models\Cuidador;

class CuidadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Obtener todos los tripulantes de la base de datos
       $cuidadores = Cuidador::all();

       // Pasar los tripulantes a la vista 'tripulantes.index'
       return view('admin.cuidadores.index', compact('cuidadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cuidadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCuidadorRequest $request)
    {
        
        $cuidador = new Cuidador;

        $cuidador->nombre = $request->nombre;
        $cuidador->apellidos = $request->apellidos;
        $cuidador->telefono = $request->telefono;
        $cuidador->email = $request->email;
        $cuidador->especialidad = $request->especialidad;

       

        $cuidador->save();

        //return view('dashboard', ['cuidador' => $cuidador]);

        return response()->json([
            'success' => true,
            'message' => 'Cuidador actualizado correctamente'
        ]);        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cuidador = Cuidador::find($id);
        return view('admin.cuidadores.show', compact('cuidador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cuidador = Cuidador::find($id);
        return view('admin.cuidadores.edit', compact('cuidador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCuidadorRequest $request, Cuidador $cuidador)
    {
        
        $request->validate([
            'nombre',
            'apellidos',
            'telefono',
            'email',
            'especialidad'
        ]);


        $cuidador->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Cuidador actualizado correctamente'
        ]);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuidador $cuidador)
{
    // Eliminar el cuidador
    $cuidador->delete();

    // Devolver una respuesta JSON
    return response()->json([
        'success' => true,
        'message' => 'Cuidador eliminado correctamente'
    ]);
}
}
