<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Animales

Route::get('/animales', AnimalController::class .'@index')->name('animales.index')->middleware('auth');
Route::get('/animales/añadir', AnimalController::class .'@create')->name('animales.create')->middleware('auth');
Route::post('/animales', [AnimalController::class, 'store'])->name('animales.store')->middleware('auth');
Route::delete('/animales/{animal}', AnimalController::class .'@destroy')->name('animales.destroy')->middleware('auth');
Route::put('/animales/{animal}', [AnimalController::class, 'update'])->name('animales.update')->middleware('auth');
Route::get('/animales/{animal}/edit', [AnimalController::class, 'edit'])->name('animales.edit')->middleware('auth');
Route::get('/animales/show/{animal}', AnimalController::class . '@show')->name('animales.show')->middleware('auth');

//Habitats

Route::get('/habitats', [HabitatController::class, 'index'])->name('habitats.index')->middleware('auth');  
Route::get('/habitats/añadir', [HabitatController::class, 'create'])->name('habitats.create')->middleware('auth');
Route::post('/habitats', [HabitatController::class, 'store'])->name('habitats.store')->middleware('auth');
Route::delete('/habitats/{habitat}', [HabitatController::class, 'destroy'])->name('habitats.destroy')->middleware('auth');
Route::put('/habitats/{habitat}', [HabitatController::class, 'update'])->name('habitats.update')->middleware('auth');
Route::get('/habitats/{habitat}/edit', [HabitatController::class, 'edit'])->name('habitats.edit')->middleware('auth');
Route::get('/habitats/show/{habitat}', [HabitatController::class, 'show'])->name('habitats.show')->middleware('auth');  

//Cuidadores

Route::get('/cuidadores', [CuidadorController::class, 'index'])->name('cuidadores.index')->middleware('auth');
Route::get('/cuidadores/añadir', [CuidadorController::class, 'create'])->name('cuidadores.create')->middleware('auth');
Route::post('/cuidadores', [CuidadorController::class, 'store'])->name('cuidadores.store')->middleware('auth');
Route::delete('/cuidadores/{cuidador}', [CuidadorController::class, 'destroy'])->name('cuidadores.destroy')->middleware('auth');
Route::put('/cuidadores/{cuidador}', [CuidadorController::class, 'update'])->name('cuidadores.update')->middleware('auth');
Route::get('/cuidadores/{cuidador}/edit', [CuidadorController::class, 'edit'])->name('cuidadores.edit')->middleware('auth');
Route::get('/cuidadores/show/{cuidador}', [CuidadorController::class, 'show'])->name('cuidadores.show')->middleware('auth');




Route::get('/admin', function () {
    return view('administracion');
})->middleware(['auth', 'verified'])->name('administracion');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
