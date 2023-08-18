<x-app-layout>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <!-- Estilos de Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <div class="caca ">
    <div class="container mt-4">
        <h3 class="text-center mb-4 text-white" style="color: white;">Editar Registro</h3>
        <form action="{{ route('registros.update', $registro->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="placa"style="color: white; font-size: 22px;">Placa:</label>
                <input type="text" name="placa" class="form-control" value="{{ $registro->vehiculo->placa }}" required>
            </div>

            <div class="form-group">
                <label for="parqueadero_id" style="color: white; font-size: 22px;">Parqueadero:</label>
                <select name="parqueadero_id" class="form-control" required>
                    <option value="" selected disabled>Seleccionar Parqueadero</option>
                    @foreach ($parqueaderos as $parqueadero)
                        <option value="{{ $parqueadero->id }}" @if ($registro->parqueadero_id === $parqueadero->id) selected @endif>{{ $parqueadero->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fecha_entrada"style="color: white; font-size: 22px;">Fecha y Hora de Entrada:</label>
                <input type="datetime-local" name="fecha_entrada" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($registro->fecha_entrada)) }}" required>
            </div>

            <div class="form-group">
                <label for="fecha_salida"style="color: white; font-size: 22px;">Fecha y Hora de Salida:</label>
                <input type="datetime-local" name="fecha_salida" class="form-control" value="{{ $registro->fecha_salida ? date('Y-m-d\TH:i', strtotime($registro->fecha_salida)) : '' }}">
            </div>

            <div class="form-group">
                <label for="precio"style="color: white; font-size: 22px;">Precio:</label>
                <input type="number" name="precio" step="0.01" class="form-control" value="{{ $registro->precio }}" required>
            </div>

            <div class="form-group">
                <label for="estado_de_pago"style="color: white; font-size: 22px;">Estado de Pago:</label>
                <select name="estado_de_pago" class="form-control">
                    <option value="0" @if ($registro->estado_de_pago === 0) selected @endif>Impago</option>
                    <option value="1" @if ($registro->estado_de_pago === 1) selected @endif>Pagado</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('registros.index') }}" class="btn btn-primary ml-2">Volver</a>
            </div>
        </form>
    </div>




 
    
        <div class="logo-container">
            <!-- Logo -->
            <img src="{{ asset('images/logoLlano.png') }}" alt="Logo" class="logo-img">

            <!-- Párrafos -->
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
                <!-- Agregar más iconos de redes sociales aquí -->
            </div>
        </div>
    </div>
        @section('scripts')
        <script>
        $(document).ready(function () {
            $('#registroFilter').change(function () {
                var filtro = $(this).val();
                var url = "{{ route('registros.index') }}";

                if (filtro === 'abiertos') {
                    url = "{{ route('registros.index') }}?filtro=abiertos";
                }

                window.location.replace(url);
            });
        });
    </script>
        @endsection

</x-app-layout>





