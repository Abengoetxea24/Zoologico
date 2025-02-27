<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cuidador extends Model
{
    /** @use HasFactory<\Database\Factories\CuidadorFactory> */

    protected $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'email',
        'especialidad'
    ];

    public function animales(): BelongsToMany

    {

        return $this->belongsToMany(Animal::class);

    }

    use HasFactory;
}
