<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelosSeeder extends Seeder
{
    public function run()
    {
        DB::table('modelos')->insert([
            ['id' => 1, 'nombre' => 'Spark', 'marca_id' => 7],
            ['id' => 2, 'nombre' => 'F-150', 'marca_id' => 2],
            ['id' => 3, 'nombre' => 'Corolla', 'marca_id' => 3],
            ['id' => 4, 'nombre' => 'Sentra', 'marca_id' => 4],
            ['id' => 5, 'nombre' => 'Civic', 'marca_id' => 5],
            ['id' => 6, 'nombre' => 'Journey', 'marca_id' => 6],
            ['id' => 7, 'nombre' => 'Journey RT', 'marca_id' => 6],
            ['id' => 8, 'nombre' => 'Corona', 'marca_id' => 3],
            // Agrega los demás modelos aquí
        ]);
    }
}
