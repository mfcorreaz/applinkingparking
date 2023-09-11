<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoVehiculo;
use App\Models\Color;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Vehiculo;
use App\Models\User;
use App\Models\VehiculosUser;
use Illuminate\Support\Facades\Auth;
class AgregarPlacaController extends Controller
{
    public function agregar_placa($user_id) {
        $tiposVehiculos = TipoVehiculo::all();
        $colores = Color::all();
        $marcas = Marca::all();
        $modelos = Modelo::all();
        return view('agregarPlaca', compact('user_id','tiposVehiculos', 'colores', 'marcas', 'modelos'));
    }

    public function crearVistaAgregar()
    {
        $tiposVehiculos = TipoVehiculo::all();
        $colores = Color::all();
        $marcas = Marca::all();
        $modelos = Modelo::all();

        return view('agregarPlaca', compact('tiposVehiculos', 'colores', 'marcas', 'modelos'));
    }

    public function guardarVehiculo(Request $request)
{
    $request->validate([
        'placa' => 'required|string|max:20',
        'tipo_vehiculo_id' => 'required|exists:tipos_vehiculos,id',
        'color_id' => 'required|exists:colores,id',
        'marca_id' => 'required|exists:marcas,id',
        'modelo_id' => 'required|exists:modelos,id',
    ]);

    // Crear y guardar el vehículo en la tabla "vehiculos"
    $vehiculo = new Vehiculo();
    $vehiculo->placa = $request->input('placa');
    $vehiculo->tipo_vehiculo_id = $request->input('tipo_vehiculo_id');
    $vehiculo->color_id = $request->input('color_id');
    $vehiculo->marca_id = $request->input('marca_id');
    $vehiculo->modelo_id = $request->input('modelo_id');
    $vehiculo->save();

  // Verificar si el usuario está autenticado antes de relacionar el vehículo
  if (Auth::check()) {
    $user = Auth::user();
    if ($user) {
        $user->vehiculos()->attach($vehiculo->id);
    }
}


    return redirect()->route('lista-vehiculos')->with('success', 'Vehículo agregado exitosamente.');
}

    //Mostrar LISTA Vehiculos de usuarios
    
    public function mostrarListaVehiculos()
    {
        // Obtén el usuario autenticado
        $user = Auth::user();
    
        // Obtén los vehículos asociados al usuario a través de la tabla pivot vehiculo_user
        $vehiculoIds = []; // Declarar y definir la variable como un array vacío
       
        $vehiculoIds = VehiculosUser::where('user_id', $user->id)->pluck('vehiculo_id')->toArray();
    

    if ($vehiculoIds !== null) {
        // El usuario tiene vehículos asociados, puedes continuar
        
        $vehiculos = Vehiculo::whereIn('id', $vehiculoIds)->get();
        
    } else {
        // El usuario no tiene vehículos asociados, puedes manejar este caso según tu lógica
    }

    
        // Carga los vehículos asociados al usuario
        $vehiculos = Vehiculo::whereIn('id', $vehiculoIds)->get();
    
        return view('lista-vehiculos', ['vehiculoIds' => $vehiculos]);
    }



}



