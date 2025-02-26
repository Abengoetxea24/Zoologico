<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Animal extends Model
{

    protected $fillable = [
        'nombre',
        'especie',
        'fecha_nacimiento',
        'habitat_id'
    ];

    public function habitat(): BelongsTo

    {

        return $this->belongsTo(Habitat::class);

    }

    public function cuidadores(): BelongsToMany

    {

        return $this->belongsToMany(Cuidador::class);

    }
    


    /** @use HasFactory<\Database\Factories\AnimalFactory> */
    use HasFactory;
}
