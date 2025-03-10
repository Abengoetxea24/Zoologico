<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\AnimalesSeeder;
use Database\Seeders\AnotherSeeder; // Add any other seeders you need to call


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            AnimalSeeder::class,
        ]);
    }
}
