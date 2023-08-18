<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    class CreateTarifasTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('tarifas', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('parqueadero_id');
                $table->unsignedBigInteger('tipo_vehiculo_id');
                $table->string('nombre');
                $table->decimal('precio', 8, 2);
                $table->time('tiempo_inicio');
                $table->time('tiempo_fin');
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
            Schema::dropIfExists('tarifas');
        }
    }
    
