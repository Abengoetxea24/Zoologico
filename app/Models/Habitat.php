<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{
    protected $fillable = [
        'nombre',
        'temperatura',
        'imagen',
        'humedad',
        'vegetacion',
        'iluminacion',
        'descripcion'
    ];


    /** @use HasFactory<\Database\Factories\HabitatFactory> */


    public function animales(): HasMany

    {

        return $this->hasMany(Animal::class);

    }

    use HasFactory;
    
}
