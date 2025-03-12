<?php
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Ruta principal (accesible para todos)
Route::get('/', function () {
    return view('welcome');
});

// Ruta del dashboard (solo para usuarios autenticados)
Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');

// Panel de administración (solo para administradores y cuidadores)
Route::get('/administracion', function () {
    return view('administracion');
})->middleware(['can:view admin'])->name('administracion');

// Rutas de Animales
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/animales', [AnimalController::class, 'index'])->name('admin.animales.index')->middleware('can:view animals');

    // Solo administradores y cuidadores pueden gestionar animales
    Route::middleware(['can:manage animals'])->group(function () {
        Route::get('/animales/añadir', [AnimalController::class, 'create'])->name('admin.animales.create');
        Route::post('/animales', [AnimalController::class, 'store'])->name('admin.animales.store');
        Route::delete('/animales/{animal}', [AnimalController::class, 'destroy'])->name('admin.animales.destroy');
        Route::put('/animales/{animal}', [AnimalController::class, 'update'])->name('admin.animales.update');
        Route::get('/animales/{animal}/edit', [AnimalController::class, 'edit'])->name('admin.animales.edit');
        Route::get('/animales/show/{animal}', [AnimalController::class, 'show'])->name('admin.animales.show');
    });
});

// Rutas de Hábitats
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/habitats', [HabitatController::class, 'index'])->name('admin.habitats.index')->middleware('can:view habitats');

    // Solo administradores pueden gestionar hábitats
    Route::middleware(['can:manage habitats'])->group(function () {
        Route::get('/habitats/añadir', [HabitatController::class, 'create'])->name('admin.habitats.create');
        Route::post('/habitats', [HabitatController::class, 'store'])->name('admin.habitats.store');
        Route::delete('/habitats/{habitat}', [HabitatController::class, 'destroy'])->name('admin.habitats.destroy');
        Route::put('/habitats/{habitat}', [HabitatController::class, 'update'])->name('admin.habitats.update');
        Route::get('/habitats/{habitat}/edit', [HabitatController::class, 'edit'])->name('admin.habitats.edit');
        Route::get('/habitats/show/{habitat}', [HabitatController::class, 'show'])->name('admin.habitats.show');
    });
});

// Rutas de Cuidadores
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/cuidadores', [CuidadorController::class, 'index'])->name('admin.cuidadores.index')->middleware('can:view cuidadores');

    // Solo administradores pueden gestionar cuidadores
    Route::middleware(['can:manage cuidadores'])->group(function () {
        Route::get('/cuidadores/añadir', [CuidadorController::class, 'create'])->name('admin.cuidadores.create');
        Route::post('/cuidadores', [CuidadorController::class, 'store'])->name('admin.cuidadores.store');
        Route::delete('/cuidadores/{cuidador}', [CuidadorController::class, 'destroy'])->name('admin.cuidadores.destroy');
        Route::put('/cuidadores/{cuidador}', [CuidadorController::class, 'update'])->name('admin.cuidadores.update');
        Route::get('/cuidadores/{cuidador}/edit', [CuidadorController::class, 'edit'])->name('admin.cuidadores.edit');
        Route::get('/cuidadores/show/{cuidador}', [CuidadorController::class, 'show'])->name('admin.cuidadores.show');
    });
});

// Rutas de Perfil (accesibles para todos los usuarios autenticados)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de autenticación
require __DIR__.'/auth.php';