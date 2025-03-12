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
    public function store(StoreAnimalRequest $request): JsonResponse
    {
        // Verificar si el usuario tiene permiso para crear animales
       

        $animal = new Animal;

        $animal->nombre = $request->nombre;
        $animal->especie = $request->especie;
        $animal->fecha_nacimiento = $request->fecha_nacimiento;
        $animal->habitat_id = $request->habitat_id;
        $animal->descripcion = $request->descripcion;

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $rutaImagen = $imagen->storeAs('public/imagenes', $nombreImagen);
            $animal->imagen = $nombreImagen;
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
    public function update(UpdateAnimalRequest $request, $id): JsonResponse
    {
        

        $animal = Animal::findOrFail($id);
        $animal->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Animal actualizado correctamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
    {
     

        $animal = Animal::findOrFail($id);
        $animal->delete();

        return response()->json([
            'success' => true,
            'message' => 'Animal eliminado correctamente'
        ]);
    }
}