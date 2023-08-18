<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory;

    protected $table = 'membresias';

    protected $fillable = [
        'user_id',
        'codigo',
        'monto',
        'fecha_inicio',
        'fecha_fin',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
