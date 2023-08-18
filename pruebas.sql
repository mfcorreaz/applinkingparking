        TABLA users 
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        TABLA vehiculos_users
        Schema::create('vehiculos_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vehiculo_id');
            $table->timestamps();
            
            // Claves foráneas
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
        });


        TABLA  registros_entradas_salidas
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
                $table->decimal(    'precio', 10, 2);
                $table->boolean('estado_de_pago');
            
                $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
                $table->foreign('parqueadero_id')->references('id')->on('parqueaderos')->onDelete('cascade');
                $table->foreign('espacio_estacionamiento_id')->references('id')->on('espacios_estacionamientos')->onDelete('cascade');

        });

    TABLA espacios_estacionamientos
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
TABLA vehiculos

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
