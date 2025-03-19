<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitatRequest;
use App\Http\Requests\UpdateHabitatRequest;
use App\Models\Habitat;
use App\Http\Requests\HabitatRequest;


class HabitatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Obtener todos los habitats de la base de datos
       $habitats = Habitat::all();

       // Pasar los habitats a la vista 'habitats.index'
       return view('admin.habitats.index', compact('habitats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.habitats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitatRequest $request)
    {
        
    $validatedData = $request->validated();
    $habitat = new Habitat;
    
    $habitat->fill($validatedData);
        $habitat->save();

        return response()->json([
            'success' => true,
            'message' => 'Hábitat creado correctamente'
        ]);        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $habitat = Habitat::find($id);
        return view('admin.habitats.show', compact('habitat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $habitat = Habitat::find($id);
        return view('admin.habitats.edit', compact('habitat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitatRequest $request, Habitat $habitat)
    {

       

        $habitat->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Hábitat actualizado correctamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habitat $habitat)
{
    // Eliminar el hábitat
    $habitat->delete();

    // Devolver una respuesta JSON
    return response()->json([
        'success' => true,
        'message' => 'Hábitat eliminado correctamente'
    ]);
}
}
