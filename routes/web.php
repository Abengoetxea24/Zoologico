<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/animales', AnimalController::class .'@index')->name('animales.index')->middleware('auth');
Route::get('/animales/añadir', AnimalController::class .'@create')->name('animales.create')->middleware('auth');
Route::post('/animales', [AnimalController::class, 'store'])->name('animales.store')->middleware('auth');
Route::delete('/animales/{animal}', AnimalController::class .'@destroy')->name('animales.destroy')->middleware('auth');
// Route::delete('/animales/{animal}', [AnimalController::class, 'destroy'])->name('animales.destroy');
Route::put('/animales/{animal}', [AnimalController::class, 'update'])->name('animales.update')->middleware('auth');
Route::get('/animales/{animal}/edit', [AnimalController::class, 'edit'])->name('animales.edit')->middleware('auth');

Route::get('/animales/show/{animal}', AnimalController::class . '@show')->name('animales.show')->middleware('auth');

Route::get('/admin', function () {
    return view('administracion');
})->middleware(['auth', 'verified'])->name('administracion');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
