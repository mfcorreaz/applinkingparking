<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Estilos para los títulos de las columnas */
        th {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 1.25rem;
        }
    </style>

    <div class="caca">
        <h3 class="text-center mb-4 text-white">Registros de Estacionamiento</h3>
        <div class="row mb-3">
            <div class="col-md-6">
                <a href="{{ route('registros.create') }}" class="btn btn-warning text-white mt-3 mb-3 ml-3">Agregar Registro</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-shadow rounded" style="width: 70%; margin: 0 auto;">
                <thead class="thead-light" style="background-color: rgba(192, 192, 192, 0.4);">
                    <tr>
                        <th class="small-column text-white small-font">Placa</th>
                        <th class="text-white small-font">Entrada</th>
                        <th class="text-white small-font">Salida</th>
                        <th class="small-column text-white small-font">Tarifa</th>
                        <th class="text-white small-font">Acciones</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f0f0f0;">
                    @foreach ($registros->reverse() as $registro)
                    <tr>
                        <td class="placa-cell {{ strlen($registro->vehiculo->placa) < 6 ? 'bg-danger text-white' : '' }} small-font">
                            {{ strtoupper($registro->vehiculo->placa) }}
                        </td>
                        <td class="small-font">{{ date('H:i', strtotime($registro->fecha_entrada)) }}</td>
                        <td class="small-font">{{ $registro->fecha_salida ? date('H:i', strtotime($registro->fecha_salida)) : 'NULL' }}</td>
                        <td class="small-font">{{ $registro->precio }}</td>
                        <td class="text-center small-font">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('registros.edit', $registro->id) }}" class="btn btn-success flex-grow-1 mr-2">Cobrar</a>
                                <a href="#" class="btn btn-primary flex-grow-1 mr-2">Editar</a>
                                <a href="#" class="btn btn-danger flex-grow-1">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="container">
                <button class="btn-volver-mov" type="button" onclick="window.location.href='{{ route('dashboard') }}'">Volver</button>
            </div>
        </div>
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
