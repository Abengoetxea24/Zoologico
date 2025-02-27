<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitatRequest;
use App\Http\Requests\UpdateHabitatRequest;
use App\Models\Habitat;

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
    public function store(StoreHabitatRequest $request)
    {
        
        $habitat = new Habitat;

        $habitat->nombre = $request->nombre;
        $habitat->temperatura = $request->temperatura;
        $habitat->humedad = $request->humedad;

        $habitat->save();

        return redirect()->route('admin.habitats.index')->with('success', 'Habitat creado correctamente');
        
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
    public function update(UpdateHabitatRequest $request, Habitat $habitat)
    {
        $request->validate([
            'nombre' => 'required',
            'temperatura' => 'required',
            'humedad' => 'required'
        ]);

        $habitat->update($request->all());

        return redirect()->route('admin.habitats.index')
            ->with('success', 'Habitat actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habitat $habitat)
    {
        $habitat->delete();
 
        return redirect()->route('admin.habitats.index')->with('success', 'Habitat eliminado correctamente');
    }
}
