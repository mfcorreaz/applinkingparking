<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\VehiculosUser;
use App\Models\Vehiculo;
use App\Models\RegistroEntradaSalida;
class DashboardController extends Controller
{
    

    public function showDashboard()
    {
        $user = Auth::user();
         // Obtener los vehículos asociados al usuario
         $vehiculos = VehiculosUser::where('user_id', $user->id)->with('vehiculo')->get();
         
            
        // Verificar el estado de cada vehículo (Activo o Inactivo)
   
        foreach ($vehiculos as $vehiculo) {
            $vehiculo->estado = RegistroEntradaSalida::where('vehiculo_id', $vehiculo->vehiculo->id)
                ->whereNull('fecha_salida')
                ->exists();
        }


        return view('dashboard', compact('user', 'vehiculos'));
    }
    
}

