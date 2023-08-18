<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    public function run()
    {
        DB::table('marcas')->insert([
            ['id' => 2, 'nombre' => 'Ford'],
            ['id' => 3, 'nombre' => 'Toyota'],
            ['id' => 4, 'nombre' => 'Nissan'],
            ['id' => 5, 'nombre' => 'Honda'],
            ['id' => 6, 'nombre' => 'Dodge'],
            ['id' => 7, 'nombre' => 'Chevrolet'],
            ['id' => 8, 'nombre' => 'Volkswagen'],
            ['id' => 9, 'nombre' => 'Renault'],
            ['id' => 10, 'nombre' => 'Hyundai'],
            ['id' => 11, 'nombre' => 'Mitsubishi'],
            ['id' => 12, 'nombre' => 'Kia'],
            ['id' => 13, 'nombre' => 'Mazda'],
            ['id' => 14, 'nombre' => 'Subaru'],
            ['id' => 15, 'nombre' => 'Fiat'],
            ['id' => 16, 'nombre' => 'Peugeot'],
            ['id' => 17, 'nombre' => 'Citroën'],
            ['id' => 18, 'nombre' => 'Jeep'],
            ['id' => 19, 'nombre' => 'Chery'],
            ['id' => 20, 'nombre' => 'Suzuki'],
        ]);
    }
}
