<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembresiasSeeder extends Seeder
{
    public function run()
    {
        DB::table('membresias')->insert([
            [
                'id' => 1,
                'user_id' => 2,
                'codigo' => 'MEMB001',
                'monto' => '0.00',
                'fecha_inicio' => '2023-07-15',
                'fecha_fin' => '2023-08-14',
                'created_at' => '2023-07-12 03:45:00',
                'updated_at' => '2023-07-12 06:45:03'
            ],
        ]);
    }
}
