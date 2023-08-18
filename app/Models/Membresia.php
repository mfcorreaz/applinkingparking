<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable = [
        'user_id',
        'nombre',
        'direccion',
        'telefono',
        'correo_electronico',
        'sitio_web',
        'ciudad_id',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
