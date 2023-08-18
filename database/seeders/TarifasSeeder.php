<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarifasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarifas = [
            [
                'parqueadero_id' => 1,
                'tipo_vehiculo_id' => 1,
                'nombre' => 'Tarifa Estándar',
                'precio' => '10.00',
                'tiempo_inicio' => '08:00:00',
                'tiempo_fin' => '18:00:00',
                'created_at' => '2023-07-12 00:48:37',
                'updated_at' => '2023-07-12 00:48:37',
            ],
            [
                'parqueadero_id' => 2,
                'tipo_vehiculo_id' => 2,
                'nombre' => 'Tarifa VIP',
                'precio' => '20.00',
                'tiempo_inicio' => '10:00:00',
                'tiempo_fin' => '20:00:00',
                'created_at' => '2023-07-12 00:48:37',
                'updated_at' => '2023-07-12 00:48:37',
            ],
            [
                'parqueadero_id' => 3,
                'tipo_vehiculo_id' => 1,
                'nombre' => 'Tarifa Económica',
                'precio' => '5.00',
                'tiempo_inicio' => '09:00:00',
                'tiempo_fin' => '17:00:00',
                'created_at' => '2023-07-12 00:48:37',
                'updated_at' => '2023-07-12 00:48:37',
            ],
            [
                'parqueadero_id' => 4,
                'tipo_vehiculo_id' => 3,
                'nombre' => 'Tarifa Especial',
                'precio' => '15.00',
                'tiempo_inicio' => '07:00:00',
                'tiempo_fin' => '22:00:00',
                'created_at' => '2023-07-12 00:48:37',
                'updated_at' => '2023-07-12 00:48:37',
            ],
        ];

        
    }
}
