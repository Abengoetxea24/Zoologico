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
use App\Models\Cuidador;
use Illuminate\Support\Facades\Storage;

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
        $cuidadores = Cuidador::all();
        return view('admin.animales.create', compact('cuidadores', 'habitats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnimalRequest $request): JsonResponse
{
    $animal = new Animal;
    $animal->nombre = $request->nombre;
    $animal->especie = $request->especie;
    $animal->fecha_nacimiento = $request->fecha_nacimiento;
    $animal->habitat_id = $request->habitat_id;
    $animal->descripcion = $request->descripcion;
    
    if ($request->hasFile('imagen')) {
        $file = $request->file('imagen');
        $filename = time() . '_' . $file->getClientOriginalName();
        $filenameParts = explode('_', $filename, 2);
        $filenameClean = $filenameParts[1] ?? $filename;
        $path = $file->storeAs('uploads/animals', $filenameClean);
        $animal->imagen = $path;
    }

    $animal->save();

    // Asociar cuidadores seleccionados
    if ($request->has('cuidadores')) {
        $animal->cuidadores()->sync($request->cuidadores);
    }

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
        $cuidadores = Cuidador::all();
        $habitats = Habitat::all();
        return view('admin.animales.edit', compact('animal', 'habitats', 'cuidadores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnimalRequest $request, Animal $animal)
{
    // Actualizar los campos básicos del animal
    $animal->update($request->except('cuidadores', 'imagen'));
    
    // Manejar la imagen si se subió una nueva
    if ($request->hasFile('imagen')) {
        // Eliminar imagen anterior si existe
        if ($animal->imagen) {
            Storage::delete($animal->imagen);
        }
        
        $file = $request->file('imagen');
        $filename = time() . '_' . $file->getClientOriginalName();
        $filenameParts = explode('_', $filename, 2);
        $filenameClean = $filenameParts[1] ?? $filename;
        $path = $file->storeAs($filenameClean);
        $animal->imagen = $path;
        $animal->save();
    }

    // Sincronizar los cuidadores (maneja automáticamente añadir/eliminar relaciones)
    if ($request->has('cuidadores')) {
        $animal->cuidadores()->sync($request->cuidadores);
    } else {
        // Si no se enviaron cuidadores, eliminar todas las relaciones
        $animal->cuidadores()->detach();
    }

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