<?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;

        class Modelo extends Model
        {
            use HasFactory;

            protected $table = 'modelos';

            protected $fillable = [
                'nombre',
                'marca_id',
            ];

            /**
            * Obtener la marca a la que pertenece el modelo.
            */
            public function marca()
            {
                return $this->belongsTo(Marca::class);
            }
        }