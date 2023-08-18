<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistrosEntradasSalidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Registro 1
        DB::table('registros_entradas_salidas')->insert([
            'vehiculo_id' => rand(1, 5),
            'parqueadero_id' => rand(1, 5),
            'espacio_estacionamiento_id' => rand(1, 4),
            'fecha_entrada' => now(),
            'fecha_salida' => null,
            'foto_entrada' => 'foto_entrada_1',
            'foto_salida' => 'foto_salida_1',
            'precio' => 10.50,
            'estado_de_pago' => true,
        ]);

        // Registro 2
        DB::table('registros_entradas_salidas')->insert([
            'vehiculo_id' => rand(1, 5),
            'parqueadero_id' => rand(1, 5),
            'espacio_estacionamiento_id' => rand(1, 4),
            'fecha_entrada' => now(),
            'fecha_salida' => null,
            'foto_entrada' => 'foto_entrada_2',
            'foto_salida' => 'foto_salida_2',
            'precio' => 15.75,
            'estado_de_pago' => false,
        ]);

        // Registro 3
        DB::table('registros_entradas_salidas')->insert([
            'vehiculo_id' => rand(1, 5),
            'parqueadero_id' => rand(1, 5),
            'espacio_estacionamiento_id' => rand(1, 4),
            'fecha_entrada' => now(),
            'fecha_salida' => null,
            'foto_entrada' => 'foto_entrada_3',
            'foto_salida' => 'foto_salida_3',
            'precio' => 12.99,
            'estado_de_pago' => true,
        ]);

        // Registro 4
        DB::table('registros_entradas_salidas')->insert([
            'vehiculo_id' => rand(1, 5),
            'parqueadero_id' => rand(1, 5),
            'espacio_estacionamiento_id' => rand(1, 4),
            'fecha_entrada' => now(),
            'fecha_salida' => null,
            'foto_entrada' => 'foto_entrada_4',
            'foto_salida' => 'foto_salida_4',
            'precio' => 9.99,
            'estado_de_pago' => true,
        ]);

        // Registro 5
        DB::table('registros_entradas_salidas')->insert([
            'vehiculo_id' => rand(1, 5),
            'parqueadero_id' => rand(1, 5),
            'espacio_estacionamiento_id' => rand(1, 4),
            'fecha_entrada' => now(),
            'fecha_salida' => null,
            'foto_entrada' => 'foto_entrada_5',
            'foto_salida' => 'foto_salida_5',
            'precio' => 14.50,
            'estado_de_pago' => false,
        ]);

        // Registro 6
        DB::table('registros_entradas_salidas')->insert([
            'vehiculo_id' => rand(1, 5),
            'parqueadero_id' => rand(1, 5),
            'espacio_estacionamiento_id' => rand(1, 4),
            'fecha_entrada' => now(),
            'fecha_salida' => null,
            'foto_entrada' => 'foto_entrada_6',
            'foto_salida' => 'foto_salida_6',
            'precio' => 11.25,
            'estado_de_pago' => true,
        ]);

        // Registro 7
        DB::table('registros_entradas_salidas')->insert([
            'vehiculo_id' => rand(1, 5),
            'parqueadero_id' => rand(1, 5),
            'espacio_estacionamiento_id' => rand(1, 4),
            'fecha_entrada' => now(),
            'fecha_salida' => null,
            'foto_entrada' => 'foto_entrada_7',
            'foto_salida' => 'foto_salida_7',
            'precio' => 13.75,
            'estado_de_pago' => false,
        ]);

        // Registro 8
        DB::table('registros_entradas_salidas')->insert([
            'vehiculo_id' => rand(1, 5),
            'parqueadero_id' => rand(1, 5),
            'espacio_estacionamiento_id' => rand(1, 4),
            'fecha_entrada' => now(),
            'fecha_salida' => null,
            'foto_entrada' => 'foto_entrada_8',
            'foto_salida' => 'foto_salida_8',
            'precio' => 10.99,
            'estado_de_pago' => true,
        ]);

        // Registro 9
        DB::table('registros_entradas_salidas')->insert([
            'vehiculo_id' => rand(1, 5),
            'parqueadero_id' => rand(1, 5),
            'espacio_estacionamiento_id' => rand(1, 4),
            'fecha_entrada' => now(),
            'fecha_salida' => null,
            'foto_entrada' => 'foto_entrada_9',
            'foto_salida' => 'foto_salida_9',
            'precio' => 12.50,
            'estado_de_pago' => false,
        ]);

        // Registro 10
        DB::table('registros_entradas_salidas')->insert([
            'vehiculo_id' => rand(1, 5),
            'parqueadero_id' => rand(1, 5),
            'espacio_estacionamiento_id' => rand(1, 4),
            'fecha_entrada' => now(),
            'fecha_salida' => null,
            'foto_entrada' => 'foto_entrada_10',
            'foto_salida' => 'foto_salida_10',
            'precio' => 11.99,
            'estado_de_pago' => true,
        ]);
    }
}
