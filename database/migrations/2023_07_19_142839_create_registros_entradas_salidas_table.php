<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosEntradasSalidasTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('registros_entradas_salidas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('vehiculo_id');
            $table->unsignedBigInteger('parqueadero_id');
            $table->unsignedBigInteger('espacio_estacionamiento_id');
            $table->dateTime('fecha_entrada');
            $table->dateTime('fecha_salida')->nullable();
            $table->string('foto_entrada')->nullable();
            $table->string('foto_salida')->nullable();
            $table->timestamps();
            $table->decimal('precio', 10, 2);
            $table->boolean('estado_de_pago');
        
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->foreign('parqueadero_id')->references('id')->on('parqueaderos')->onDelete('cascade');
            $table->foreign('espacio_estacionamiento_id')->references('id')->on('espacios_estacionamientos')->onDelete('cascade');

        });
        
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('registros_entradas_salidas');
    }
}