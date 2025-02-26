<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Obtener todos los tripulantes de la base de datos
       $animales = Animal::all();

       // Pasar los tripulantes a la vista 'tripulantes.index'
       return view('animales.index', compact('animales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        
        $animal = new Animal;

        $animal->nombre = $request->nombre;
        $animal->especie = $request->especie;
        $animal->fecha_nacimiento = $request->fecha_nacimiento;
        $animal->habitat_id = $request->habitat_id;
        $animal->descripcion = $request->descripcion;

        // Guardar la imagen
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName(); // Nombre único para la imagen
            $rutaImagen = $imagen->storeAs('public/imagenes', $nombreImagen); // Guardar en la carpeta "public/imagenes"
            $animal->imagen = $nombreImagen; // Guardar el nombre de la imagen en la base de datos
        }

        $animal->save();

        return redirect()->route('animales.index')->with('success', 'Animal creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
