<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Habitat; // Asegúrate de que el modelo Habitat exista

class HabitatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de los hábitats
        Habitat::create([
            'nombre' => 'Sabana',
            'temperatura' => '25-30°C',
            'humedad' => 'Baja',
            'vegetacion' => 'Pastizales y arbustos',
            'iluminacion' => 'Alta',
            'descripcion' => 'Ecosistema de praderas con clima cálido y poca humedad.',
            'imagen' => 'sabana.jpg',
        ]);

        Habitat::create([
            'nombre' => 'Bosque Tropical',
            'temperatura' => '20-25°C',
            'humedad' => 'Alta',
            'vegetacion' => 'Árboles frondosos y densa vegetación',
            'iluminacion' => 'Moderada',
            'descripcion' => 'Ecosistema con alta biodiversidad y clima húmedo.',
            'imagen' => 'bosque_tropical.jpg',
        ]);

        Habitat::create([
            'nombre' => 'Desierto',
            'temperatura' => '35-40°C',
            'humedad' => 'Muy baja',
            'vegetacion' => 'Escasa, principalmente cactus',
            'iluminacion' => 'Muy alta',
            'descripcion' => 'Ecosistema árido con temperaturas extremas y poca vegetación.',
            'imagen' => 'desierto.jpg',
        ]);

        Habitat::create([
            'nombre' => 'Tundra',
            'temperatura' => '-30 a 10°C',
            'humedad' => 'Media',
            'vegetacion' => 'Musgos y líquenes',
            'iluminacion' => 'Baja en invierno, alta en verano',
            'descripcion' => 'Ecosistema frío con vegetación escasa y suelos congelados.',
            'imagen' => 'tundra.jpg',
        ]);
    }
}