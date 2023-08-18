<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VehiculosUser;
use App\Models\User;
use App\Models\Vehiculo;

class VehiculosUsersSeeder extends Seeder
{
    public function run()
    {
        // Obtener todos los IDs de usuarios y vehículos existentes en la base de datos
        $userIds = User::pluck('id')->toArray();
        $vehiculoIds = Vehiculo::pluck('id')->toArray();

        // Crear 10 registros en la tabla vehiculos_users
        for ($i = 1; $i <= 10; $i++) {
            VehiculosUser::create([
                'user_id' => ($i <= 2) ? 33 : array_rand($userIds),
                'vehiculo_id' => array_rand($vehiculoIds),
            ]);
        }
    }
}
