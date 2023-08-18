<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Parqueadero;
use App\Models\Tarifa;
use App\Models\Vehiculo;
use App\Models\VehiculosUser;
use App\Models\TipoVehiculo;
use App\Models\RegistroEntradaSalida;
use Carbon\Carbon;

class MapaController extends Controller
{
    public function mostrarMapa()
    {
        // Obtener los parqueaderos cercanos desde la base de datos
        $parqueaderosCercanos = Parqueadero::all();

        return view('mapa', compact('parqueaderosCercanos')); 
    }


    public function store(Request $request){
        // Obtener el vehículo por su ID
        $vehiculo = Vehiculo::find($request->vehiculo_id);

        // Verificar si el vehículo tiene una sesión activa
        $sesionActiva = DB::table('registros_entradas_salidas')
            ->where('vehiculo_id', $vehiculo->id)
            ->whereNull('fecha_salida')
            ->exists();

        // Si el vehículo tiene una sesión activa, mostrar mensaje de error
        if ($sesionActiva) {
            return redirect()->route('dashboard')->withErrors('Intento de Reserva denegada. El vehiculo elegido ya posee una reserva aún abierta.')->withInput();
        }


        $regristroES = new RegistroEntradaSalida;
        $regristroES->parqueadero_id = $request->parqueadero_id;
        $regristroES->vehiculo_id = $request->vehiculo_id;
        $regristroES->fecha_entrada = now();
        $regristroES->save();
        return redirect()->route('dashboard')->with('success', 'Reserva realizada con éxito');;
        
        //return $request->all();
    }
}
