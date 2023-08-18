<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class EspacioEstacionamiento extends Model
    {
        use HasFactory;
    
        protected $table = 'espacios_estacionamientos';
    
        protected $fillable = [
            'parqueadero_id',
            'tipo_vehiculo_id',
            'estado',
            // Agrega aquí otros campos adicionales que sean necesarios
        ];
    
        public function parqueadero()
        {
            return $this->belongsTo(Parqueadero::class);
        }
    
        public function tipoVehiculo()
        {
            return $this->belongsTo(TipoVehiculo::class, 'tipo_vehiculo_id');
        }
    }
    