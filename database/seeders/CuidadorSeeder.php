<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cuidador; // Asegúrate de que el modelo Cuidador exista

class CuidadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de los cuidadores
        Cuidador::create([
            'nombre' => 'Juan',
            'apellidos' => 'alberto',
            'telefono' => '654714586',
            'email' => 'test@example.com',
            'especialidad' => 'suricatos',
            'created_at' => '2025-02-27 11:15:03',
            'updated_at' => '2025-03-10 16:09:21',
        ]);

        Cuidador::create([
            'nombre' => 'Manuel',
            'apellidos' => 'alberto',
            'telefono' => '685666258',
            'email' => 'test@example.com',
            'especialidad' => 'leones',
            'created_at' => '2025-02-27 11:16:18',
            'updated_at' => '2025-03-10 16:08:57',
        ]);

        Cuidador::create([
            'nombre' => 'Julian',
            'apellidos' => 'Sonserra',
            'telefono' => '658741258',
            'email' => 'test@example.com',
            'especialidad' => 'perros',
            'created_at' => '2025-02-27 11:54:58',
            'updated_at' => '2025-03-10 16:09:06',
        ]);

        Cuidador::create([
            'nombre' => 'Juan',
            'apellidos' => 'Pérez Gómez',
            'telefono' => '600123456',
            'email' => 'juan.perez@example.com',
            'especialidad' => 'Mamíferos grandes',
            'created_at' => '2025-03-10 16:07:37',
            'updated_at' => '2025-03-10 16:07:37',
        ]);

        Cuidador::create([
            'nombre' => 'María',
            'apellidos' => 'López Sánchez',
            'telefono' => '600234567',
            'email' => 'maria.lopez@example.com',
            'especialidad' => 'Aves tropicales',
            'created_at' => '2025-03-10 16:08:21',
            'updated_at' => '2025-03-10 16:08:21',
        ]);
    }
}