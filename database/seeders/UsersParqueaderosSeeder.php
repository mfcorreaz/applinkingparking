<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersParqueaderosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_parqueaderos')->insert([
            ['ID' => 1, 'user_id' => 2, 'parqueadero_id' => 1, 'Estado' => 'Activo'],
            ['ID' => 2, 'user_id' => 3, 'parqueadero_id' => 2, 'Estado' => 'Activo'],
        ]);
    }
}
