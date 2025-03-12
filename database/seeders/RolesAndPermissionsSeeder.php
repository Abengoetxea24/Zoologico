<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear permisos
    Permission::create(['name' => 'view admin']);
    Permission::create(['name' => 'view animals']);
    Permission::create(['name' => 'view cuidadores']);
    Permission::create(['name' => 'view habitats']);
    Permission::create(['name' => 'manage animals']);
    Permission::create(['name' => 'manage cuidadores']);
    Permission::create(['name' => 'manage habitats']);

    // Crear roles y asignar permisos
    $adminRole = Role::create(['name' => 'admin']);
    $adminRole->givePermissionTo([
        'view admin',
        'view animals',
        'view cuidadores',
        'view habitats',
        'manage animals',
        'manage cuidadores',
        'manage habitats',
    ]);

    $cuidadorRole = Role::create(['name' => 'cuidador']);
    $cuidadorRole->givePermissionTo([
        'view admin',
        'view animals',
        'view cuidadores',
        'view habitats',
        'manage animals', // Solo puede gestionar animales
    ]);

    $guestRole = Role::create(['name' => 'guest']);
    // El invitado no tiene permisos adicionales


    }
}
