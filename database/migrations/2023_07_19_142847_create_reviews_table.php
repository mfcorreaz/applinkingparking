<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('registro_id');
            $table->enum('tipo', ['usuario', 'parqueadero']); // Nuevo campo para distinguir el tipo de calificación
            $table->text('comentario');
            $table->integer('calificacion');
            $table->timestamps();
            
            
            $table->foreign('registro_id')->references('id')->on('registros_entradas_salidas')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
