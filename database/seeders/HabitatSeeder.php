<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Habitat;

class HabitatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de los hábitats
        $habitats = [
            [
                'nombre' => 'Selva Tropical',
                'temperatura' => '25°C - 30°C',
                'imagen' => 'selva_tropical.jpeg',
                'humedad' => '70% - 90%',
                'vegetacion' => 'Árboles frondosos, enredaderas y plantas tropicales',
                'iluminacion' => 'Luz natural filtrada por la vegetación',
                'descripcion' => 'Un hábitat húmedo y cálido, ideal para especies como monos, tucanes y jaguares.',
            ],
            [
                'nombre' => 'Desierto',
                'temperatura' => '35°C - 45°C (día), 5°C - 15°C (noche)',
                'imagen' => 'desierto.jpeg',
                'humedad' => '10% - 20%',
                'vegetacion' => 'Cactus, arbustos resistentes a la sequía',
                'iluminacion' => 'Luz solar intensa durante el día',
                'descripcion' => 'Un hábitat árido y seco, hogar de especies como camellos, serpientes de cascabel y escorpiones.',
            ],
            [
                'nombre' => 'Sabana',
                'temperatura' => '20°C - 30°C',
                'imagen' => 'sabana.jpeg',
                'humedad' => '40% - 60%',
                'vegetacion' => 'Hierbas altas, árboles dispersos como acacias',
                'iluminacion' => 'Luz solar directa',
                'descripcion' => 'Un hábitat de pastizales abiertos, ideal para leones, cebras y jirafas.',
            ],
            [
                'nombre' => 'Bosque Templado',
                'temperatura' => '10°C - 20°C',
                'imagen' => 'Bosque_Templado.jpeg',
                'humedad' => '50% - 70%',
                'vegetacion' => 'Árboles de hoja caduca, arbustos y musgo',
                'iluminacion' => 'Luz solar moderada',
                'descripcion' => 'Un hábitat con estaciones marcadas, hogar de osos, ciervos y lobos.',
            ],
            [
                'nombre' => 'Tundra',
                'temperatura' => '-30°C - 10°C',
                'imagen' => 'Tundra.jpeg',
                'humedad' => '30% - 50%',
                'vegetacion' => 'Musgos, líquenes y pequeñas plantas resistentes al frío',
                'iluminacion' => 'Luz solar escasa en invierno, largos días en verano',
                'descripcion' => 'Un hábitat frío y ventoso, ideal para renos, osos polares y zorros árticos.',
            ],
            [
                'nombre' => 'Pantano',
                'temperatura' => '15°C - 25°C',
                'imagen' => 'Pantano.jpeg',
                'humedad' => '80% - 100%',
                'vegetacion' => 'Plantas acuáticas, juncos y manglares',
                'iluminacion' => 'Luz solar filtrada por la niebla',
                'descripcion' => 'Un hábitat acuático y húmedo, hogar de cocodrilos, tortugas y aves acuáticas.',
            ],
            [
                'nombre' => 'Montaña Rocosa',
                'temperatura' => '5°C - 15°C',
                'imagen' => 'Montaña_rocosa.jpeg',
                'humedad' => '40% - 60%',
                'vegetacion' => 'Arbustos resistentes, hierbas y flores alpinas',
                'iluminacion' => 'Luz solar intensa en altitudes altas',
                'descripcion' => 'Un hábitat montañoso, ideal para cabras montesas, águilas y pumas.',
            ],
            [
                'nombre' => 'Arrecife de Coral',
                'temperatura' => '22°C - 28°C',
                'imagen' => 'Arrecife_coral.jpeg',
                'humedad' => 'N/A (hábitat acuático)',
                'vegetacion' => 'Corales, algas marinas',
                'iluminacion' => 'Luz solar filtrada por el agua',
                'descripcion' => 'Un hábitat submarino lleno de vida, hogar de peces tropicales, corales y tortugas marinas.',
            ],
        ];

        // Insertar los datos en la tabla 'habitats'
        foreach ($habitats as $habitat) {
            Habitat::create($habitat);
        }
    }
}