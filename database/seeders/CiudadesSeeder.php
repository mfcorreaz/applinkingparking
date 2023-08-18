<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadesSeeder extends Seeder
{
    public function run()
    {
        DB::table('ciudades')->insert([
            ['id' => 1, 'nombre' => 'La Plata', 'estado_id' => 3],
            ['id' => 2, 'nombre' => 'Cordoba', 'estado_id' => 4],
            ['id' => 3, 'nombre' => 'Corrientes', 'estado_id' => 5],
            ['id' => 4, 'nombre' => 'Posadas', 'estado_id' => 6],
            ['id' => 5, 'nombre' => 'Santa Fé', 'estado_id' => 7],
            ['id' => 14, 'nombre' => 'La Matanza', 'estado_id' => 3],
            ['id' => 17, 'nombre' => 'Merlo', 'estado_id' => 3],
            ['id' => 18, 'nombre' => 'Goya', 'estado_id' => 5],
            ['id' => 21, 'nombre' => 'Saladas', 'estado_id' => 5],
            ['id' => 22, 'nombre' => 'Monte Caseros', 'estado_id' => 5],
            ['id' => 23, 'nombre' => 'Mar del Plata', 'estado_id' => 3],
            ['id' => 24, 'nombre' => 'San Luis del Palmar', 'estado_id' => 5],
        ]);
    }
}
