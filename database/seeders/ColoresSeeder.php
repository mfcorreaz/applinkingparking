<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColoresSeeder extends Seeder
{
    public function run()
    {
        DB::table('colores')->insert([
            ['id' => 1, 'nombre' => 'Rojo'],
            ['id' => 2, 'nombre' => 'Azul'],
            ['id' => 3, 'nombre' => 'Verde'],
            ['id' => 4, 'nombre' => 'Negro'],
            ['id' => 5, 'nombre' => 'Blanco'],
            ['id' => 6, 'nombre' => 'Gris'],
            ['id' => 7, 'nombre' => 'Plateado'],
            ['id' => 8, 'nombre' => 'Amarillo'],
            ['id' => 9, 'nombre' => 'Naranja'],
            ['id' => 10, 'nombre' => 'Morado'],
            ['id' => 11, 'nombre' => 'Rosado'],
            ['id' => 12, 'nombre' => 'Beige'],
            ['id' => 13, 'nombre' => 'Marrón'],
            ['id' => 14, 'nombre' => 'Celeste'],
            ['id' => 15, 'nombre' => 'Turquesa'],
            ['id' => 16, 'nombre' => 'Dorado'],
            ['id' => 17, 'nombre' => 'Platino'],
            ['id' => 18, 'nombre' => 'Granate'],
            ['id' => 19, 'nombre' => 'Cobre'],
            ['id' => 20, 'nombre' => 'Plomo'],
        ]);
    }
}
