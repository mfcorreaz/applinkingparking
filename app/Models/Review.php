<?php

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = ['comentario', 'calificacion', 'user_id', 'parqueadero_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function parqueadero()
    {
        return $this->belongsTo(Parqueadero::class, 'parqueadero_id');
    }

    public function registrosEntradasSalidas()
    {
        return $this->hasMany(RegistrosEntradasSalidas::class, 'review_id');
    }
}
