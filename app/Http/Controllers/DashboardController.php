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
    
        if (!$user) {
            // No se encontró un usuario autenticado, redirigir a donde sea apropiado
            // por ejemplo, a la página de inicio de sesión
            return redirect()->route('login');
        }
    
        // Resto del código para obtener y verificar vehículos
        $vehiculos = VehiculosUser::where('user_id', $user->id)->with('vehiculo')->get();
    
        foreach ($vehiculos as $vehiculo) {
            $vehiculo->estado = RegistroEntradaSalida::where('vehiculo_id', $vehiculo->vehiculo->id)
                ->whereNull('fecha_salida')
                ->exists();
        }
    
        return view('dashboard', compact('user', 'vehiculos'));
    }
    
    
}

