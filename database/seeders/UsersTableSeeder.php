<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contraseña común para todos los usuarios
        $password = Hash::make('123456qwerty');

        // Datos de los usuarios
        $users = [
            [
                'name' => 'Administrador',
                'email' => 'admin@selvanova.com',
                'password' => $password,
                'created_at' => '2025-03-12 11:38:57',
                'updated_at' => '2025-03-12 11:38:57',
            ],
            [
                'name' => 'Cuidador',
                'email' => 'juan.perez@selvanova.com',
                'password' => $password,
                'created_at' => '2025-03-12 11:40:08',
                'updated_at' => '2025-03-12 11:40:08',
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@selvanova.com',
                'password' => $password,
                'created_at' => '2025-03-12 11:40:35',
                'updated_at' => '2025-03-12 11:40:35',
            ],
        ];

        // Insertar los datos en la tabla 'users'
        DB::table('users')->insert($users);
    }
}