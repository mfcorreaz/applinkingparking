<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParqueaderosSeeder extends Seeder
{
    public function run()
    {
        DB::table('parqueaderos')->insert([
            [
                'id' => 1,
                'nombre' => 'Yacare',
                'direccion' => 'Calle Avenida Rivadavia 123',
                'latitud' => '-27.48526500',
                'longitud' => '-58.81494300',
                'capacidad' => 50,
                'horarios' => '08:00 - 20:00',
                'informacion_adicional' => 'Servicio de valet parking disponible',
                'status' => 1,
                'empresa_id' => 1,
                'created_at' => '2023-07-11 22:56:00',
                'updated_at' => '2023-07-12 15:16:12',
            ],
            [
                'id' => 2,
                'nombre' => 'Ara Vera',
                'direccion' => 'Calle San Juan 456',
                'latitud' => '-27.49483700',
                'longitud' => '-58.80562300',
                'capacidad' => 30,
                'horarios' => '07:00 - 22:00',
                'informacion_adicional' => 'Seguridad las 24 horas',
                'status' => 0,
                'empresa_id' => 2,
                'created_at' => '2023-07-11 22:56:01',
                'updated_at' => '2023-07-11 22:56:01',
            ],
            [
                'id' => 3,
                'nombre' => 'Cabral',
                'direccion' => 'Calle Belgrano 789',
                'latitud' => '-27.48491200',
                'longitud' => '-58.81555500',
                'capacidad' => 40,
                'horarios' => '24 horas',
                'informacion_adicional' => 'Descuentos especiales para clientes frecuentes',
                'status' => 0,
                'empresa_id' => 1,
                'created_at' => '2023-07-11 22:56:01',
                'updated_at' => '2023-07-11 22:56:01',
            ],
            [
                'id' => 4,
                'nombre' => 'San Martin',
                'direccion' => 'Calle Junín 321',
                'latitud' => '-27.48854500',
                'longitud' => '-58.80897200',
                'capacidad' => 20,
                'horarios' => '09:00 - 18:00',
                'informacion_adicional' => 'Servicio de lavado de vehículos',
                'status' => 0,
                'empresa_id' => 2,
                'created_at' => '2023-07-11 22:56:01',
                'updated_at' => '2023-07-11 22:56:01',
            ],
            [
                'id' => 5,
                'nombre' => 'Tacuari',
                'direccion' => 'Calle Tacuari 654',
                'latitud' => '-27.48593200',
                'longitud' => '-58.81137900',
                'capacidad' => 35,
                'horarios' => '06:00 - 00:00',
                'informacion_adicional' => 'Estacionamiento cubierto disponible',
                'status' => 0,
                'empresa_id' => 3,
                'created_at' => '2023-07-11 22:56:01',
                'updated_at' => '2023-07-11 22:56:01',
            ],
            [
                'id' => 6,
                'nombre' => 'Sapucay',
                'direccion' => 'Calle Juan Pujol 987',
                'latitud' => '-27.49067100',
                'longitud' => '-58.80720900',
                'capacidad' => 25,
                'horarios' => '08:00 - 21:00',
                'informacion_adicional' => 'Espacios para motocicletas disponibles',
                'status' => 0,
                'empresa_id' => 3,
                'created_at' => '2023-07-11 22:56:01',
                'updated_at' => '2023-07-11 22:56:01',
            ],
            [
                'id' => 7,
                'nombre' => '7 puntas',
                'direccion' => 'Calle 9 de Julio 234',
                'latitud' => '-27.48671300',
                'longitud' => '-58.81014200',
                'capacidad' => 15,
                'horarios' => '10:00 - 19:00',
                'informacion_adicional' => 'Servicio de carga de vehículos eléctricos',
                'status' => 0,
                'empresa_id' => 1,
                'created_at' => '2023-07-11 22:56:01',
                'updated_at' => '2023-07-11 22:56:01',
            ],
            [
                'id' => 8,
                'nombre' => 'Regatas',
                'direccion' => 'Calle 25 de Mayo 567',
                'latitud' => '-27.48261400',
                'longitud' => '-58.82003800',
                'capacidad' => 50,
                'horarios' => '07:00 - 23:00',
                'informacion_adicional' => 'Tarifas especiales para eventos deportivos',
                'status' => 0,
                'empresa_id' => 2,
                'created_at' => '2023-07-11 22:56:01',
                'updated_at' => '2023-07-11 22:56:01',
            ],
            [
                'id' => 9,
                'nombre' => 'El parque',
                'direccion' => 'Calle Juan de Vera 876',
                'latitud' => '-27.49315700',
                'longitud' => '-58.81911400',
                'capacidad' => 30,
                'horarios' => '09:00 - 20:00',
                'informacion_adicional' => 'Sistema de reserva en línea disponible',
                'status' => 0,
                'empresa_id' => 3,
                'created_at' => '2023-07-11 22:56:01',
                'updated_at' => '2023-07-11 22:56:01',
            ],
            [
                'id' => 10,
                'nombre' => 'Centenario',
                'direccion' => 'Calle Brasil 432',
                'latitud' => '-27.49020600',
                'longitud' => '-58.81341800',
                'capacidad' => 40,
                'horarios' => '08:00 - 22:00',
                'informacion_adicional' => 'Descuento para residentes de la zona',
                'status' => 0,
                'empresa_id' => 1,
                'created_at' => '2023-07-11 22:56:01',
                'updated_at' => '2023-07-11 22:56:01',
            ],
        ]);
    }
}