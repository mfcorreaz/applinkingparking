<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="caca">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="">
            <label class="labelUser topContainer">Hola, {{ $user->name }} !!!</label>
        </div>
        <div class=" ">
           
                @if(isset($vehiculos) && count($vehiculos) > 0)
                    <div class="label_patente">
                        <label for="patente" class="labelDashPatente patenteContainer">Patente</label>
                    </div>
                    <div class="padre_patente patenteContainer">
                    <div class="select-container">
                        <select id="patente" name="patente" class="select">
                            @foreach($vehiculos as $vehiculo)
                                <option value="{{ $vehiculo->vehiculo->id }}">{{ $vehiculo->vehiculo->placa }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                    <div class="btn-add">
                        <a href="{{ route('lista-vehiculos', ['user_id' => Auth::id()]) }}" class="" >
                            <img src="{{ asset('images/plus.png') }}" alt="agregar">
                        </a>
                    </div>
        </div>

            <div class="center-content">
                <div class="button-container ">
                    @if(isset($vehiculos) && count($vehiculos) > 0)
                        <a href="#" class="custom-button btn-estado patenteContainer">
                            <img src="{{ asset('images/estado.png') }}" alt="Estado" class="ico-btn">
                            Estado
                            @if ($vehiculo->estado)
                                Activo
                            @else
                                Inactivo
                            @endif
                        </a>
                    @else
                    <a href="{{ route('agregarPlaca', ['user_id' => Auth::id()]) }}" class="custom-button btn-estado patenteContainer">
                        Agregar Placa
                    </a>

                        <!-- <a href="#" class="custom-button btn-estado patenteContainer">
                            Agregar Placa
                        </a> -->
                    @endif
                </div>
            </div>
            <div class="center-content ">
                <div class="button-container">
                    @if(isset($vehiculos) && count($vehiculos) > 0)
                        <a href="{{ route('mostrar-mapa', ['user_id' => Auth::id(),'vehiculo' => $vehiculos[0]->vehiculo->id, 'placa' => $vehiculos[0]->vehiculo->placa]) }}" class="custom-button btn-reservar patenteContainer">
                            <img src="{{ asset('images/reserva.png') }}" alt="Estado" class="ico-btn">
                            Reservar
                        </a>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <a href="{{ route('movimientos_usuario', ['user_id' => Auth::id(), 'placa' => $vehiculos[0]->vehiculo->placa]) }}" class="custom-button btn-movimientos patenteContainer">
                            <img src="{{ asset('images/movimiento.png') }}" alt="Estado" class="ico-btn">
                            Movimientos
                        </a>
                        <a href="{{ route('registros.index') }}" class="custom-button btn-parqueadero patenteContainer">
                            <img src="{{ asset('images/contractor.png') }}" alt="Estado" class="ico-btn">
                            Parqueadero
                        </a>
                    @else
                        <a href="#" class="custom-button btn-billetera patenteContainer">
                            <img src="{{ asset('images/billetera.png') }}" alt="Estado" class="ico-btn">
                            Mi Billetera
                        </a>
                        <a href="{{ route('registros.index') }}" class="custom-button btn-parqueadero patenteContainer">
                            <img src="{{ asset('images/contractor.png') }}" alt="Estado" class="ico-btn">
                            Parqueadero
                        </a>
                    @endif
                </div>
            </div>
            <div class="logo-container">
                <img src="{{ asset('images/logoLlano.png') }}" alt="Logo" class="logo-img">
                <p class="promo-text">Promo 2024</p>
                <p class="asesor-text">Asesor: MFCZ</p>
                <div class="social-icons-container">
                    <a href="enlace_facebook" class="social-icon">
                        <img src="{{ asset('images/facebook.png') }}" alt="Facebook">
                    </a>
                    <a href="enlace_instagram" class="social-icon">
                        <img src="{{ asset('images/instagram.png') }}" alt="Instagram">
                    </a>
                    <a href="enlace_tiktok" class="social-icon">
                        <img src="{{ asset('images/tiktok.png') }}" alt="TikTook">
                    </a>
                    <a href="enlace_discord" class="social-icon">
                        <img src="{{ asset('images/discord.png') }}" alt="Discord">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function mostrarMensaje() {
            alert("Próximamente");
        }
    </script>
</x-app-layout>
