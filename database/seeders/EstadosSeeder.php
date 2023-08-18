<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    public function run()
    {
        DB::table('estados')->insert([
            ['id' => 3, 'nombre' => 'Buenos Aires', 'pais_id' => 11],
            ['id' => 4, 'nombre' => 'Córdoba', 'pais_id' => 11],
            ['id' => 5, 'nombre' => 'Corrientes', 'pais_id' => 11],
            ['id' => 6, 'nombre' => 'Misiones', 'pais_id' => 11],
            ['id' => 7, 'nombre' => 'Santa Fe', 'pais_id' => 11],
            ['id' => 8, 'nombre' => 'Entre Ríos', 'pais_id' => 11],
            ['id' => 9, 'nombre' => 'Tucumán', 'pais_id' => 11],
            ['id' => 10, 'nombre' => 'Salta', 'pais_id' => 11],
            ['id' => 11, 'nombre' => 'Chubut', 'pais_id' => 11],
            ['id' => 16, 'nombre' => 'Chaco', 'pais_id' => 11],
            ['id' => 17, 'nombre' => 'Curitiva', 'pais_id' => 12],
            ['id' => 19, 'nombre' => 'Neuquén', 'pais_id' => 11],
        ]);
    }
}
