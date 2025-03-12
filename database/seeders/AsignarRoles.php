<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;

class AsignarRoles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Asignar rol de administrador
        $admin = User::where('email', 'admin@selvanova.com')->first();
        if ($admin) {
            $admin->assignRole('admin');
        }

        // Asignar rol de cuidador
        $cuidador = User::where('email', 'juan.perez@selvanova.com')->first();
        if ($cuidador) {
            $cuidador->assignRole('cuidador');
        }

        // Asignar rol de invitado
        $guest = User::where('email', 'guest@selvanova.com')->first();
        if ($guest) {
            $guest->assignRole('guest');
        }
    }
}