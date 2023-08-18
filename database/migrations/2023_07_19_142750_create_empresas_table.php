<?php
        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;
        
        class CreateEmpresasTable extends Migration
        {
            public function up()
            {
                Schema::create('empresas', function (Blueprint $table) {
                    $table->id();
                    $table->string('nombre');
                    $table->string('direccion');
                    $table->string('telefono');
                    $table->string('correo_electronico');
                    $table->string('sitio_web');
                    $table->unsignedBigInteger('ciudad_id');
                    $table->timestamps();
                    
                    $table->foreign('ciudad_id')->references('id')->on('ciudades');
                });
            }
        
            public function down()
            {
                Schema::dropIfExists('empresas');
            }
        }
        
