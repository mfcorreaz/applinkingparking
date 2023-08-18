<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspaciosEstacionamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('espacios_estacionamientos')->insert([
            [
                'id' => 1,
                'parqueadero_id' => 1,
                'tipo_vehiculo_id' => 1,
                'estado' => 1,
                'created_at' => '2023-07-12 01:12:55',
                'updated_at' => '2023-07-12 01:12:55',
            ],
            [
                'id' => 2,
                'parqueadero_id' => 1,
                'tipo_vehiculo_id' => 2,
                'estado' => 1,
                'created_at' => '2023-07-12 01:12:55',
                'updated_at' => '2023-07-12 01:12:55',
            ],
            [
                'id' => 3,
                'parqueadero_id' => 2,
                'tipo_vehiculo_id' => 1,
                'estado' => 1,
                'created_at' => '2023-07-12 01:12:55',
                'updated_at' => '2023-07-12 01:12:55',
            ],
            [
                'id' => 4,
                'parqueadero_id' => 2,
                'tipo_vehiculo_id' => 2,
                'estado' => 1,
                'created_at' => '2023-07-12 01:12:55',
                'updated_at' => '2023-07-12 01:12:55',
            ],
        ]);
    }
}
