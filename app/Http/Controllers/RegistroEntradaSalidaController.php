<?php

namespace App\Http\Controllers;

use App\Models\RegistroEntradaSalida;
use Illuminate\Http\Request;
use App\Models\Parqueadero;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\Auth;

class RegistroEntradaSalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filtro = $request->input('filtro', 'todos');

        if ($filtro === 'abiertos') {
            $registros = RegistroEntradaSalida::whereNull('fecha_salida')->with('vehiculo')->get();
        } else {
            $registros = RegistroEntradaSalida::with('vehiculo')->get();
        }

        return view('registros_entradas_salidas', compact('registros', 'filtro'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parqueaderos = Parqueadero::all();
        return view('crear_registro', compact('parqueaderos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar el formulario aquí si es necesario...
    
        // Obtener el ID del vehículo por la placa
        $vehiculo = Vehiculo::where('placa', $request->placa)->first();
    
        if (!$vehiculo) {
            // Si el vehículo no existe, puedes crear uno nuevo o mostrar un mensaje de error
            // Por ejemplo, aquí se crea un nuevo vehículo con la placa proporcionada:
            $vehiculo = new Vehiculo();
            $vehiculo->placa = $request->placa;
            $vehiculo->save();
        }
    
        // Crear un nuevo registro y asignar los valores
        $registro = new RegistroEntradaSalida();
        $registro->vehiculo_id = $vehiculo->id;
        $registro->parqueadero_id = $request->parqueadero_id;
        $registro->fecha_entrada = $request->fecha_entrada;
        $registro->fecha_salida = $request->fecha_salida;
        $registro->precio = $request->precio;
        $registro->estado_de_pago = $request->estado_de_pago;
    
        // Guardar el registro en la base de datos
        $registro->save();
    
        // Redireccionar a la vista de índice (por ejemplo, la lista de registros)
        return redirect()->route('registros.index')->with('success', 'El registro se ha guardado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NombreModelo $nombreModelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegistroEntradaSalida $registro)
    {
        $parqueaderos = Parqueadero::all();
        return view('editar_registro', compact('registro', 'parqueaderos'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $registro = RegistroEntradaSalida::find($id);

        if (!$registro) {
            return redirect()->route('registros.index')->with('error', 'Registro no encontrado.');
        }

        $request->validate([
            'placa' => 'required',
            'parqueadero_id' => 'required',
            'fecha_entrada' => 'required',
            'fecha_salida' => 'nullable',
            'precio' => 'required',
            'estado_de_pago' => 'required',
        ]);

        // Actualizar los datos del registro
        $registro->vehiculo_id = Vehiculo::where('placa', $request->placa)->value('id');
        $registro->parqueadero_id = $request->parqueadero_id;
        $registro->fecha_entrada = $request->fecha_entrada;
        $registro->fecha_salida = $request->fecha_salida;
        $registro->precio = $request->precio;
        $registro->estado_de_pago = $request->estado_de_pago;
        $registro->save();

        return redirect()->route('registros.index')->with('success', 'Registro actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NombreModelo $nombreModelo)
    {
        //
    }


 public function movimientosUsuario($placa)
{
    $registros = RegistroEntradaSalida::whereHas('vehiculo', function ($query) use ($placa) {
        $query->where('placa', $placa);
    })->with('vehiculo', 'parqueadero')->get();

    return view('movimientos_usuario', compact('registros', 'placa'));
}
    
    


}
