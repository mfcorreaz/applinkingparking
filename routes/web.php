<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservaController; // Importa el controlador si aún no lo has creado
use App\Http\Controllers\RegistroEntradaSalidaController;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\AgregarPlacaController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
//Route::get('/reservar', [ReservaController::class, 'mostrarVista'])->name('reservar');
// este codigo es para reservar lugar. mapa y demas
// Route::get('/reser', [ReservaController::class, 'mostrarVista'])->name('reser');
// Route::get('/obtenerTarifas/{parqueadero_id}', [ReservaController::class, 'getTarifasPorParqueadero']);
// Route::post('/realizar-reserva/{placa}', [ReservaController::class, 'realizarReserva'])->name('realizar_reserva');
Route::get('/movimientos_usuario/{placa}', [RegistroEntradaSalidaController::class, 'movimientosUsuario'])->name('movimientos_usuario');
// Ruta del mapa
Route::get('/mostrar-mapa', [MapaController::class, 'mostrarMapa'])->name('mostrar-mapa');

// Ruta para reservar el parqueadero

Route::post('reservar', [MapaController::class, 'store'])->name('reservar.store');


Route::post('/realizar-reserva/{vehiculo_id}/{parqueadero_id}', [MapaController::class, 'realizarReserva'])->name('realizar_reserva');


Route::get('/reservar', function () {
    return view('reservar');
})->name('reservar');

// RUTAS PARQUEADERO MOVIMEINTORutas protegidas por middleware de autenticación
Route::middleware(['auth'])->group(function () {
    // Ruta para mostrar la lista de registros de entrada y salida
    Route::get('/registros', [RegistroEntradaSalidaController::class, 'index'])->name('registros.index');

    // Ruta para mostrar el formulario de registro de entrada de un vehículo
    Route::get('/registros/crear', [RegistroEntradaSalidaController::class, 'create'])->name('registros.create');

    // Ruta para procesar el formulario y guardar el registro de entrada de un vehículo
     Route::post('/registros', [RegistroEntradaSalidaController::class, 'store'])->name('registros.store');

    // Ruta para mostrar el formulario de edición de un registro de entrada/salida
    Route::get('/registros/{registro}/editar', [RegistroEntradaSalidaController::class, 'edit'])->name('registros.edit');


    // Ruta para actualizar un registro de entrada/salida después de editar
    Route::put('/registros/{id}', [RegistroEntradaSalidaController::class, 'update'])->name('registros.update');

    // Ruta para eliminar un registro de entrada/salida
    Route::delete('/registros/{id}', [RegistroEntradaSalidaController::class, 'destroy'])->name('registros.destroy');
});

// RUTA PARA AGREGAR VEHICULO
    Route::get('/agregar-vehiculo/{user_id}', [AgregarPlacaController::class, 'agregar_placa'])->name('agregarPlaca');
    

    
    Route::get('/agregar-vehiculo', [AgregarPlacaController::class, 'agregar_placa'])->name('crear-vista-agregar');
    Route::post('/guardar-vehiculo', [AgregarPlacaController::class, 'guardarVehiculo'])->name('guardar-vehiculo');
    
    //Ruta para mostrar la lista de los vehiculos del usuario
    Route::get('/lista-vehiculos', [AgregarPlacaController::class, 'mostrarListaVehiculos'])->name('lista-vehiculos');
    


