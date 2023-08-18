<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class Tarifa extends Model
    {
        use HasFactory;
    
        protected $table = 'tarifas';
    
        protected $fillable = [
            'parqueadero_id',
            'tipo_vehiculo_id',
            'nombre',
            'precio',
            'tiempo_inicio',
            'tiempo_fin',
        ];
    
        public function parqueadero()
        {
            return $this->belongsTo(Parqueadero::class, 'parqueadero_id');
        }
    
        public function tipoVehiculo()
        {
            return $this->belongsTo(TipoVehiculo::class, 'tipo_vehiculo_id');
        }
    }
