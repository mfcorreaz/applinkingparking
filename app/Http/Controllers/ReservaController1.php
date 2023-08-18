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


class ReservaController extends Controller
{
    public function mostrarVista(Request $request)
    {
        $placa = $request->query('placa');
        $vehiculo = Vehiculo::where('placa', $placa)->first();
    
        $user_id = Auth::id(); // Obtiene el ID del usuario autenticado
        $parqueaderos = Parqueadero::all();
        $parqueaderoId = $request->input('parqueadero_id');
    
        
        $tipoVehiculoNombre = $vehiculo ? TipoVehiculo::find($vehiculo->tipo_vehiculo_id)->nombre : "Tipo de vehículo no encontrado";
    
       
        //return view('reservar', compact('user_id', 'parqueaderos', 'tipoVehiculoNombre'));
        return view('reser', compact('user_id', 'parqueaderos', 'tipoVehiculoNombre'));
    }


    public function realizarReserva(Request $request, $placa)
    {
        // Buscar el vehículo en la base de datos por la placa proporcionada en la URL
        $vehiculo = Vehiculo::where('placa', $placa)->first();
    
        // Verificar si el vehículo existe
        if (!$vehiculo) {
            return redirect()->route('buscar_vehiculo')->withErrors('El vehículo no fue encontrado.')->withInput();
        }

           // Verificar si el vehículo tiene una sesión abierta
            $sesionAbierta = RegistroEntradaSalida::where('vehiculo_id', $vehiculo->id)
            ->whereNull('fecha_salida')
            ->exists();

        if ($sesionAbierta) {
            return redirect()->route('dashboard')->with('error', 'Ya tienes una sesión de estacionamiento abierta.');

        }
        


     
    
        // Guardar la reserva en la base de datos
        RegistroEntradaSalida::create([
            'vehiculo_id' => $vehiculo->id, // Establecer el ID del vehículo
            'parqueadero_id' => $request->input('parqueadero_id'), // Obtener el ID del parqueadero del formulario
            'fecha_entrada' => Carbon::now(), // Establecer la fecha y hora de entrada
        ]);
    
        // Redireccionar a la página de reserva exitosa con un mensaje
        return redirect()->route('dashboard');
    }



    public function reservaExitosa()
{
    return view('reserva_exitosa');
}

}


    // public function getTarifasPorParqueadero($parqueadero_id)
    // {
    //     $tarifas = DB::table('tarifas')
    //         ->where('parqueadero_id', $parqueadero_id)
            
    //         ->get();

    //     return response()->json($tarifas);
    // }
  


