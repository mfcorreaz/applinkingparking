<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroEntradaSalida  extends Model
{
    protected $table = 'registros_entradas_salidas';
    //protected $fillable = ['vehiculo_id', 'parqueadero_id',  'fecha_entrada', 'fecha_salida', 'foto_entrada', 'foto_salida', 'precio', 'estado_de_pago', 'estado_id', 'review_id'];
//    protected $fillable = ['vehiculo_id', 'parqueadero_id', 'fecha_entrada'];
    protected $fillable = ['vehiculo_id', 'parqueadero_id', 'fecha_entrada', 'fecha_salida', 'precio', 'estado_de_pago'];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'vehiculo_id');
    }

    public function parqueadero()
    {
        return $this->belongsTo(Parqueadero::class, 'parqueadero_id');
    }


    public function espacioEstacionamiento()
    {
        return $this->belongsTo(EspacioEstacionamiento::class, 'espacio_estacionamiento_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function review()
    {
        return $this->belongsTo(Review::class, 'review_id');
    }
}
