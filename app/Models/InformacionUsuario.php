<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacionUsuario extends Model
{
    use HasFactory;
    
    protected $table = 'informacion_usuarios';

    protected $fillable = [
        'direccion',
        'dni',
        // Agrega aquí otros campos adicionales para la información de usuarios
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
