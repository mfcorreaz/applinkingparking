<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    class CreateVehiculosTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('vehiculos', function (Blueprint $table) {
                $table->id();
                $table->string('placa', 20);
                $table->unsignedBigInteger('tipo_vehiculo_id');
                $table->unsignedBigInteger('color_id');
                $table->unsignedBigInteger('marca_id');
                $table->unsignedBigInteger('modelo_id');
                $table->timestamps();
                
                $table->foreign('tipo_vehiculo_id')->references('id')->on('tipos_vehiculos');
                $table->foreign('color_id')->references('id')->on('colores');
                $table->foreign('marca_id')->references('id')->on('marcas');
                $table->foreign('modelo_id')->references('id')->on('modelos');
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('vehiculos');
        }
    }
