<x-app-layout>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <!-- Estilos de Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <div class="caca ">
    <h3 class="text-center mb-4 text-white">Movimientos de {{ $registros->first()->vehiculo->placa }}</h3>

    <div class="table-responsive">
    <table class="table table-bordered table-shadow rounded" style="width: 90%; margin: 0 auto;">
        <thead class="thead-light text-center" style="background-color: rgba(192, 192, 192, 0.4);">
            <tr>
                <th class="small-column text-white small-font">Placa</th>
                <th class="text-white small-font">Parqueadero</th>
                <th class="text-white small-font">Fecha Entrada</th>
                <th class="text-white small-font">Fecha Salida</th>
                <th class="small-column text-white small-font">Precio</th>
                <th class="text-white small-font">Acciones</th>
            </tr>
        </thead>
        <tbody style="background-color: #f0f0f0;">
            @foreach ($registros as $movimiento)
            <tr>
                <td class="placa-cell {{ strlen($movimiento->vehiculo->placa) < 6 ? 'short-placa' : '' }} small-font">{{ $movimiento->vehiculo->placa }}</td>
                <td class="text-center small-font">{{ $movimiento->parqueadero->nombre }}</td>
                <td class="text-center small-font">{{ date('Y-m-d', strtotime($movimiento->fecha_entrada)) }}</td>
                <td class="text-center small-font">{{ $movimiento->fecha_salida ? date('Y-m-d', strtotime($movimiento->fecha_salida)) : 'NULL' }}</td>
                <td class="text-center small-font">{{ $movimiento->precio }}</td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="#" class="btn btn-success mr-2"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-primary mr-2"><i class="fa fa-info-circle"></i></a>
                        <a href="#" class="btn btn-warning "><i class="fa fa-star"></i> </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
          
             
</div>

            <div class="container">
                <button class=" btn-volver-mov" type="button" onclick="window.location.href='{{ route('dashboard') }}'">Volver</button>
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





