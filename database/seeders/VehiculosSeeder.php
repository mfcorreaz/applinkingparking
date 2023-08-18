<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehiculos')->insert([
            [
                'id' => 11,
                'placa' => 'ABC123',
                'tipo_vehiculo_id' => 1,
                'color_id' => 2,
                'marca_id' => 3,
                'modelo_id' => 4,
                'created_at' => '2023-07-12 00:20:08',
                'updated_at' => '2023-07-12 00:20:08',
            ],
            [
                'id' => 17,
                'placa' => 'DEF456',
                'tipo_vehiculo_id' => 2,
                'color_id' => 1,
                'marca_id' => 5,
                'modelo_id' => 6,
                'created_at' => '2023-07-12 00:21:20',
                'updated_at' => '2023-07-12 00:21:20',
            ],
            [
                'id' => 18,
                'placa' => 'GHI789',
                'tipo_vehiculo_id' => 1,
                'color_id' => 3,
                'marca_id' => 3,
                'modelo_id' => 4,
                'created_at' => '2023-07-12 00:22:09',
                'updated_at' => '2023-07-12 00:22:09',
            ],
            [
                'id' => 19,
                'placa' => 'JKL012',
                'tipo_vehiculo_id' => 3,
                'color_id' => 2,
                'marca_id' => 5,
                'modelo_id' => 6,
                'created_at' => '2023-07-12 00:22:09',
                'updated_at' => '2023-07-12 00:22:09',
            ],
            [
                'id' => 20,
                'placa' => 'MNO345',
                'tipo_vehiculo_id' => 2,
                'color_id' => 1,
                'marca_id' => 3,
                'modelo_id' => 4,
                'created_at' => '2023-07-12 00:22:09',
                'updated_at' => '2023-07-12 00:22:09',
            ],
        ]);
    }
}
