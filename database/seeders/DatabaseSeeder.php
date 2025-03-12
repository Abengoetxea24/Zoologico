<?php

namespace Database\Seeders;


use Database\Seeders\CuidadorSeeder;
use Database\Seeders\HabitatSeeder;


use Database\Seeders\UsersTableSeeder;
use Database\Seeders\AsignarRoles;
use Database\Seeders\AnimalSeeder;
use Database\Seeders\RolesAndPermissionsSeeder;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;


use Database\Seeders\AnotherSeeder; // Add any other seeders you need to call


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
           
            CuidadorSeeder::class,
            HabitatSeeder::class,
            AnimalSeeder::class,
            UsersTableSeeder::class,
            RolesAndPermissionsSeeder::class,
            AsignarRoles::class
           
        ]);
        
    }
}
