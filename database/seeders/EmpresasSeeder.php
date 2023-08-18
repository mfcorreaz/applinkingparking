<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresasSeeder extends Seeder
{
    public function run()
    {
        DB::table('empresas')->insert([
            [
                'id' => 1,
                'nombre' => 'Empresa A',
                'direccion' => 'Calle 123',
                'telefono' => '123456789',
                'correo_electronico' => 'empresaA@example.com',
                'sitio_web' => 'www.empresaA.com',
                'ciudad_id' => 4,
                'created_at' => '2023-07-11 22:43:11',
                'updated_at' => '2023-07-12 19:22:10',
            ],
            [
                'id' => 2,
                'nombre' => 'Empresa B',
                'direccion' => 'Calle 456',
                'telefono' => '987654321',
                'correo_electronico' => 'empresaB@example.com',
                'sitio_web' => 'www.empresaB.com',
                'ciudad_id' => 3,
                'created_at' => '2023-07-11 22:43:11',
                'updated_at' => '2023-07-11 22:43:11',
            ],
            [
                'id' => 3,
                'nombre' => 'Empresa C',
                'direccion' => 'Calle 789',
                'telefono' => '456123789',
                'correo_electronico' => 'empresaC@example.com',
                'sitio_web' => 'www.empresaC.com',
                'ciudad_id' => 18,
                'created_at' => '2023-07-11 22:43:11',
                'updated_at' => '2023-07-11 22:43:11',
            ],
            [
                'id' => 4,
                'nombre' => 'Empresa D',
                'direccion' => 'Calle 321',
                'telefono' => '789654123',
                'correo_electronico' => 'empresaD@example.com',
                'sitio_web' => 'www.empresaD.com',
                'ciudad_id' => 4,
                'created_at' => '2023-07-11 22:43:11',
                'updated_at' => '2023-07-11 22:43:11',
            ],
            [
                'id' => 5,
                'nombre' => 'Empresa E',
                'direccion' => 'Calle 654',
                'telefono' => '321987456',
                'correo_electronico' => 'empresaE@example.com',
                'sitio_web' => 'www.empresaE.com',
                'ciudad_id' => 14,
                'created_at' => '2023-07-11 22:43:11',
                'updated_at' => '2023-07-11 22:43:11',
            ],
            [
                'id' => 6,
                'nombre' => 'Empresa F',
                'direccion' => 'Calle 987',
                'telefono' => '654321987',
                'correo_electronico' => 'empresaF@example.com',
                'sitio_web' => 'www.empresaF.com',
                'ciudad_id' => 23,
                'created_at' => '2023-07-11 22:43:11',
                'updated_at' => '2023-07-11 22:43:11',
            ],
            [
                'id' => 7,
                'nombre' => 'Empresa G',
                'direccion' => 'Calle 159',
                'telefono' => '123987654',
                'correo_electronico' => 'empresaG@example.com',
                'sitio_web' => 'www.empresaG.com',
                'ciudad_id' => 24,
                'created_at' => '2023-07-11 22:43:11',
                'updated_at' => '2023-07-11 22:43:11',
            ],
            [
                'id' => 8,
                'nombre' => 'Empresa H',
                'direccion' => 'Calle 753',
                'telefono' => '789321654',
                'correo_electronico' => 'empresaH@example.com',
                'sitio_web' => 'www.empresaH.com',
                'ciudad_id' => 21,
                'created_at' => '2023-07-11 22:43:11',
                'updated_at' => '2023-07-11 22:43:11',
            ],
            [
                'id' => 9,
                'nombre' => 'Empresa I',
                'direccion' => 'Calle 258',
                'telefono' => '654789321',
                'correo_electronico' => 'empresaI@example.com',
                'sitio_web' => 'www.empresaI.com',
                'ciudad_id' => 4,
                'created_at' => '2023-07-11 22:43:11',
                'updated_at' => '2023-07-11 22:43:11',
            ],
            [
                'id' => 10,
                'nombre' => 'Empresa J',
                'direccion' => 'Calle 852',
                'telefono' => '321654789',
                'correo_electronico' => 'empresaJ@example.com',
                'sitio_web' => 'www.empresaJ.com',
                'ciudad_id' => 17,
                'created_at' => '2023-07-11 22:43:11',
                'updated_at' => '2023-07-11 22:43:11',
            ],
        ]);
    }
}
