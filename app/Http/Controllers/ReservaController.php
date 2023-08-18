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

class ReservaController extends Controller
{
    public function show()
    {
        return view('reser');
    }

    public function buscarParqueaderos(Request $request)
    {
        $placa = $request->input('placa');

        $parqueaderosCercanos = Parqueadero::where('placa_vehiculo', $placa)->get();

        return view('vista_con_parqueaderos', compact('parqueaderosCercanos'));
    }

    public function reservarParqueadero(Request $request)
    {
        $placa = $request->input('placa');
        $distanciaSeleccionada = $request->input('distancia');

        $reserva = new Tarifa();
        $reserva->placa_vehiculo = $placa;
        $reserva->distancia_seleccionada = $distanciaSeleccionada;
        $reserva->save();

        return redirect()->route('nombre_de_la_ruta')->with('success', 'Reserva realizada con éxito');
    }

    public function getParqueaderosCercanos($distancia)
    {
        // Realiza una consulta a la base de datos para obtener los parqueaderos cercanos según la distancia proporcionada
        $parqueaderosCercanos = Parqueadero::where('distancia', '<=', $distancia)->get();

        return response()->json($parqueaderosCercanos);
    }
    
}
