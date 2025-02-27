<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');

//Panel de administracion

Route::get('/administracion', function () {
    return view('administracion');
})->middleware(['auth', 'verified'])->name('administracion');


//Animales

Route::get('/animales', AnimalController::class .'@index')->name('admin.animales.index')->middleware('auth');
Route::get('/animales/añadir', AnimalController::class .'@create')->name('admin.animales.create')->middleware('auth');
Route::post('/animales', [AnimalController::class, 'store'])->name('admin.animales.store')->middleware('auth');
Route::delete('/animales/{animal}', AnimalController::class .'@destroy')->name('admin.animales.destroy')->middleware('auth');
Route::put('/animales/{animal}', [AnimalController::class, 'update'])->name('admin.animales.update')->middleware('auth');
Route::get('/animales/{animal}/edit', [AnimalController::class, 'edit'])->name('admin.animales.edit')->middleware('auth');
Route::get('/animales/show/{animal}', AnimalController::class . '@show')->name('admin.animales.show')->middleware('auth');

//Habitats

Route::get('/habitats', [HabitatController::class, 'index'])->name('admin.habitats.index')->middleware('auth');  
Route::get('/habitats/añadir', [HabitatController::class, 'create'])->name('admin.habitats.create')->middleware('auth');
Route::post('/habitats', [HabitatController::class, 'store'])->name('admin.habitats.store')->middleware('auth');
Route::delete('/habitats/{habitat}', [HabitatController::class, 'destroy'])->name('admin.habitats.destroy')->middleware('auth');
Route::put('/habitats/{habitat}', [HabitatController::class, 'update'])->name('admin.habitats.update')->middleware('auth');
Route::get('/habitats/{habitat}/edit', [HabitatController::class, 'edit'])->name('admin.habitats.edit')->middleware('auth');
Route::get('/habitats/show/{habitat}', [HabitatController::class, 'show'])->name('admin.habitats.show')->middleware('auth');  

//Cuidadores

Route::get('/cuidadores', [CuidadorController::class, 'index'])->name('admin.cuidadores.index')->middleware('auth');
Route::get('/cuidadores/añadir', [CuidadorController::class, 'create'])->name('admin.cuidadores.create')->middleware('auth');
Route::post('/cuidadores', [CuidadorController::class, 'store'])->name('admin.cuidadores.store')->middleware('auth');
Route::delete('/cuidadores/{cuidador}', [CuidadorController::class, 'destroy'])->name('admin.cuidadores.destroy')->middleware('auth');
Route::put('/cuidadores/{cuidador}', [CuidadorController::class, 'update'])->name('admin.cuidadores.update')->middleware('auth');
Route::get('/cuidadores/{cuidador}/edit', [CuidadorController::class, 'edit'])->name('admin.cuidadores.edit')->middleware('auth');
Route::get('/cuidadores/show/{cuidador}', [CuidadorController::class, 'show'])->name('admin.cuidadores.show')->middleware('auth');




Route::get('/admin', function () {
    return view('administracion');
})->middleware(['auth', 'verified'])->name('administracion');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
