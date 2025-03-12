<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de los animales
        $animales = [
            [
                'nombre' => 'León',
                'especie' => 'Panthera leo',
                'fecha_nacimiento' => '2018-05-15',
                'habitat_id' => 1, // Selva Tropical
                'imagen' => 'Leon.jpg',
                'descripcion' => "El 'rey de la selva'. Felino grande y poderoso.",
            ],
            [
                'nombre' => 'Jirafa',
                'especie' => 'Giraffa camelopardalis',
                'fecha_nacimiento' => '2019-03-22',
                'habitat_id' => 3, // Sabana
                'imagen' => 'Jirafa.jpg',
                'descripcion' => 'El animal más alto. Largo cuello y manchas únicas.',
            ],
            [
                'nombre' => 'Elefante',
                'especie' => 'Loxodonta africana',
                'fecha_nacimiento' => '2015-07-10',
                'habitat_id' => 3, // Sabana
                'imagen' => 'Elefante.jpg',
                'descripcion' => 'Mamífero terrestre más grande. Trompa larga y colmillos de marfil.',
            ],
            [
                'nombre' => 'Pingüino',
                'especie' => 'Aptenodytes forsteri',
                'fecha_nacimiento' => '2020-11-30',
                'habitat_id' => 5, // Tundra
                'imagen' => 'Pinguino.jpg',
                'descripcion' => 'Ave no voladora. Excelente nadador en climas fríos.',
            ],
            [
                'nombre' => 'Tigre',
                'especie' => 'Panthera tigris',
                'fecha_nacimiento' => '2017-09-05',
                'habitat_id' => 1, // Selva Tropical
                'imagen' => 'Tigre.jpg',
                'descripcion' => 'Felino más grande. Cazador solitario con pelaje rayado.',
            ],
            [
                'nombre' => 'Cebra',
                'especie' => 'Equus quagga',
                'fecha_nacimiento' => '2016-12-18',
                'habitat_id' => 3, // Sabana
                'imagen' => 'Cebra.jpeg',
                'descripcion' => 'Animal africano. Pelaje blanco y negro con rayas únicas.',
            ],
            [
                'nombre' => 'Oso',
                'especie' => 'Ursus arctos',
                'fecha_nacimiento' => '2014-04-25',
                'habitat_id' => 4, // Bosque Templado
                'imagen' => 'Oso.jpeg',
                'descripcion' => 'Gran mamífero omnívoro. Fuerte y peludo, habita en bosques y montañas.',
            ],
            [
                'nombre' => 'Suricato',
                'especie' => 'Suricata suricatta',
                'fecha_nacimiento' => '2024-11-07',
                'habitat_id' => 2, // Desierto
                'imagen' => 'Suricato.jpeg',
                'descripcion' => 'Pequeño mamífero carnívoro de la familia de las mangostas. Vive en grupos sociales en las llanuras y desiertos del sur de África. Conocido por su comportamiento vigilante y postura erguida.',
            ],
            [
                'nombre' => 'Lémur',
                'especie' => 'Lemur catta',
                'fecha_nacimiento' => '2024-12-10',
                'habitat_id' => 1, // Selva Tropical
                'imagen' => 'Lemur.jpeg',
                'descripcion' => 'Primate endémico de Madagascar. Conocido por su cola anillada y su comportamiento social. Habita en bosques y zonas arbóreas.',
            ],
        ];

        // Insertar los datos en la tabla 'animals'
        foreach ($animales as $animal) {
            Animal::create($animal);
        }
    }
}