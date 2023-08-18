<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->insert([
            ['id' => 11, 'nombre' => 'Argentina'],
            ['id' => 12, 'nombre' => 'Brasil'],
            ['id' => 13, 'nombre' => 'Colombia'],
            ['id' => 14, 'nombre' => 'Ecuador'],
            ['id' => 15, 'nombre' => 'España'],
            ['id' => 16, 'nombre' => 'Norte América'],
            ['id' => 17, 'nombre' => 'Francia'],
            ['id' => 18, 'nombre' => 'Italia'],
            ['id' => 19, 'nombre' => 'México'],
            ['id' => 20, 'nombre' => 'Perú'],
            ['id' => 21, 'nombre' => 'Paraguay'],
            ['id' => 23, 'nombre' => 'Honduras'],
        ]);
    }
}
