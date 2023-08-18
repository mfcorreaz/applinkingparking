<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    class CreateEspaciosEstacionamientosTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('espacios_estacionamientos', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('parqueadero_id');
                $table->unsignedBigInteger('tipo_vehiculo_id');
                $table->boolean('estado')->default(true);
                // Agrega aquí otros campos adicionales que sean necesarios
    
                $table->timestamps();
    
                $table->foreign('parqueadero_id')->references('id')->on('parqueaderos')->onDelete('cascade');
                $table->foreign('tipo_vehiculo_id')->references('id')->on('tipos_vehiculos')->onDelete('cascade');
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('espacios_estacionamientos');
        }
    }

    
    