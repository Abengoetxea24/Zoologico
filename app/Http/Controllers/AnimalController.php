<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Models\Animal;
use App\Models\Habitat;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\AnimalRequest;


class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
       

        $animales = Animal::all();
        return view('admin.animales.index', compact('animales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
       

        $habitats = Habitat::all();
        return view('admin.animales.create', compact('habitats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnimalRequest $request): JsonResponse
    {
        // Verificar si el usuario tiene permiso para crear animales
       

        $animal = new Animal;

       

        $animal->nombre = $request->nombre;
        $animal->especie = $request->especie;
        $animal->fecha_nacimiento = $request->fecha_nacimiento;
        $animal->habitat_id = $request->habitat_id;
        $animal->descripcion = $request->descripcion;
        
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            $filenameParts = explode('_', $filename, 2); // Divide el nombre en 2 partes
            $filenameClean = $filenameParts[1] ?? $filename; // Toma la parte después del _

            $path = $file->storeAs($filenameClean);
            
            $animal->imagen = $path;
        }

        $animal->save();

        return response()->json([
            'success' => true,
            'message' => 'Animal creado correctamente'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        // Verificar si el usuario tiene permiso para ver animales
        

        $animal = Animal::findOrFail($id);
        return view('admin.animales.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
      

        $animal = Animal::findOrFail($id);
        $habitats = Habitat::all();
        return view('admin.animales.edit', compact('animal', 'habitats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnimalRequest $request, Animal $animal)
    {
        
       

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