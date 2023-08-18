<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformacionUsuariosSeeder extends Seeder
{
    public function run()
    {
        DB::table('informacion_usuarios')->insert([
            ['id' => 1, 'user_id' => 1, 'direccion' => 'Calle Principal 123', 'dni' => '123456789'],
            ['id' => 2, 'user_id' => 2, 'direccion' => 'Avenida Central 456', 'dni' => '987654321'],
            ['id' => 3, 'user_id' => 3, 'direccion' => 'Plaza Mayor 789', 'dni' => '654321987'],
        ]);
    }
}
