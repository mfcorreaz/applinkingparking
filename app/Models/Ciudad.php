<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudades';

    protected $fillable = [
        'nombre',
        'estado_id',
    ];

    /**
    * Obtener el estado al que pertenece la ciudad.
    */
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}