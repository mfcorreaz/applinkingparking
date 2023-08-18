<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Estado extends Model
    {
        use HasFactory;

        protected $table = 'estados';

        protected $fillable = [
            'nombre',
            'pais_id',
        ];

        /**
        * Obtener el país al que pertenece el estado.
        */
        public function pais()
        {
            return $this->belongsTo(Pais::class);
        }

        /**
        * Obtener las ciudades asociadas al estado.
        */
        public function ciudades()
        {
            return $this->hasMany(Ciudad::class);
        }
    }