<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculosUser extends Model
{
    use HasFactory;

    protected $table = 'vehiculos_users';

    // Aquí puedes definir atributos adicionales o personalizar el modelo según tus necesidades

    // Definir relación con el modelo User (Un usuario puede tener varios vehículos)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Definir relación con el modelo Vehiculo (Un vehículo puede pertenecer a varios usuarios)
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'vehiculo_id');
    }
}