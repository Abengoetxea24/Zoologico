<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Models\Animal;
use App\Models\Habitat;


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
       return view('admin.animales.index', compact('animales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $habitats = Habitat::all(); // Obtener todos los hábitats
        return view('admin.animales.create', compact('habitats'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        
        $animales = new Animal;

        $animales->nombre = $request->nombre;
        $animales->especie = $request->especie;
        $animales->fecha_nacimiento = $request->fecha_nacimiento;
        $animales->habitat_id = $request->habitat_id;
        $animales->descripcion = $request->descripcion;

        // Guardar la imagen
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName(); // Nombre único para la imagen
            $rutaImagen = $imagen->storeAs('public/imagenes', $nombreImagen); // Guardar en la carpeta "public/imagenes"
            $animales->imagen = $nombreImagen; // Guardar el nombre de la imagen en la base de datos
        }

        $animales->save();

        //return view('dashboard', ['animales' => $animales]);

        return response()->json([
            'success' => true,
            'message' => 'Animal actualizado correctamente'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $animal = Animal::find($id);
        return view('admin.animales.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UpdateAnimalRequest $request, $id)
    {
        $animal = Animal::find($id);
        return view('admin.animales.edit', compact('animal'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalRequest $request, $id)
    {
        $request->validate([
            'nombre',
            'especie',
            'fecha_nacimiento',
            'habitat_id',
            'descripcion',
            'imagen'
        ]);

        //Buscar registro en la BBDD
        $animal = Animal::find($id);
        $animal->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Animal actualizado correctamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        // Eliminar el animal
        $animal->delete();
    
        // Devolver una respuesta JSON
        return response()->json([
            'success' => true,
            'message' => 'Animal eliminado correctamente'
        ]);
    }
}
