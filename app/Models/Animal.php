<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    protected $fillable = [
        'nombre',
        'especie',
        'fecha_nacimiento',
        'habitat_id'
    ];

    


    /** @use HasFactory<\Database\Factories\AnimalFactory> */
    use HasFactory;
}
