<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parqueadero extends Model
{
    use HasFactory;

    protected $table = 'parqueaderos';

    protected $fillable = [
        'nombre',
        'direccion',
        'latitud',
        'longitud',
        'capacidad',
        'horarios',
        'informacion_adicional',
        'status',
        'empresa_id',
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function registrosEntradaSalida()
    {
        return $this->hasMany(RegistroEntradaSalida::class);
    }

}
