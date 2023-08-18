<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- JavaScript de Bootstrap (requiere jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">   
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>


    <!-- Contenedor del mapa -->
    <div id="map" style="height: 400px;"></div>

    
    
    <div class="container mt-5">
        <!-- Input Patente -->
        <div class="mb-4">
            <input type="text" id="placaInput" class="form-control" placeholder="Patente">
        </div>

         <!-- Select para elegir la distancia -->
        <div class="mb-4">
            <label for="distancia">Seleccionar distancia:</label>
            <select id="distancia" class="form-select">
                <option value="300">300 metros</option>
                <option value="500">500 metros</option>
                <option value="1000">1 kilómetro</option>
                <option value="2000">2 kilómetros</option>
                <option value="3000">3 kilómetros</option>
                <option value="4000">4 kilómetros</option>
                <option value="5000">5 kilómetros</option>
            </select>
        </div>

        <!-- Botón Actualizar -->
        <div class="mb-4">
            <label class="sr-only" for="btnActualizar">Actualizar</label>
            <button id="btnActualizar" class="btn btn-primary ">Actualizar Distancia</button>
        </div>

      
        <!-- Label e input  nombre de parqueadero -->
        <div class="mb-4">
            <label for="buscar">Parqueadero:</label>
            <input type="text" id="buscar" class="form-control" placeholder="Nombre del parqueadero" required>
        </div>
        <!-- Label e input direccion de parqueadero -->
        <div class="mb-4">
            <label for="buscar">Dirección:</label>
            <input type="text" id="direccion" class="form-control" placeholder="Dirección del parqueadero" required>
        </div>
      
      


        <div class="d-grid gap-2">
          <form id="reservaForm" action="{{ route('reservar.store') }}" method="POST">    
        
                @csrf
                <input type="hidden" name="vehiculo_id" id="vehiculoid" value="">
                <input type="hidden" name="parqueadero_id" id="idParqueradero" value="">
                <br>
                <button type="submit"  class="btn btn-success btn-block btn-reservar">Reservar</button>
            </form>

            <button class="btn btn-primary" type="button" onclick="window.location.href='{{ route('dashboard') }}'">Volver</button>
        </div>

    </div>


    <script>
        var map;
        var userMarker;
        var parqueaderos = @json($parqueaderosCercanos);
        

        function initMap() {
            map = L.map('map').setView([0, 0], 13); // Establecer la ubicación inicial y el nivel de zoom

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Obtener ubicación actual del usuario
            if ('geolocation' in navigator) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var userLat = position.coords.latitude;
                    var userLng = position.coords.longitude;

                    // Centrar el mapa en la ubicación actual del usuario
                    map.setView([userLat, userLng], 13);

                    // Agregar marcador para la ubicación actual del usuario
                    userMarker = L.marker([userLat, userLng], { icon: L.icon({ iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-blue.png', iconSize: [25, 41], iconAnchor: [12, 41], popupAnchor: [1, -34], shadowSize: [41, 41] }) }).addTo(map).bindPopup('Mi Ubicación').openPopup();

                    // Mostrar los parqueaderos cercanos en el mapa
                    parqueaderos.forEach(function(parqueadero) {
                        var marker = L.marker([parqueadero.latitud, parqueadero.longitud], { icon: L.icon({ iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png', iconSize: [25, 41], iconAnchor: [12, 41], popupAnchor: [1, -34], shadowSize: [41, 41] }) }).addTo(map).bindPopup(parqueadero.nombre);
                        marker.on('click', function() {
                            document.getElementById('buscar').value = parqueadero.nombre;
                            document.getElementById('direccion').value = parqueadero.direccion;
                            document.getElementById('idParqueradero').value = parqueadero.id;
                            
                        });
                    });
                }, function (error) {
                    console.log('Error al obtener la ubicación: ' + error.message);
                });
            } else {
                console.log('Geolocalización no disponible en este navegador.');
            }
        }

        // Actualizar los parqueaderos al cambiar la distancia seleccionada
        document.getElementById('btnActualizar').addEventListener('click', function() {
            var distanciaSeleccionada = document.getElementById('distancia').value;
            var filteredParqueaderos = parqueaderos.filter(function(parqueadero) {
                var latLngUser = L.latLng(userMarker.getLatLng().lat, userMarker.getLatLng().lng);
                var latLngParqueadero = L.latLng(parqueadero.latitud, parqueadero.longitud);
                var distancia = latLngUser.distanceTo(latLngParqueadero);
                return distancia <= distanciaSeleccionada;
            });

            // Limpiar los marcadores actuales en el mapa
            map.eachLayer(function(layer) {
                if (layer instanceof L.Marker) {
                    map.removeLayer(layer);
                }
            });

            // Mostrar los nuevos parqueaderos cercanos en el mapa
            userMarker.addTo(map);
            filteredParqueaderos.forEach(function(parqueadero) {
                var marker = L.marker([parqueadero.latitud, parqueadero.longitud], { icon: L.icon({ iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png', iconSize: [25, 41], iconAnchor: [12, 41], popupAnchor: [1, -34], shadowSize: [41, 41] }) }).addTo(map).bindPopup(parqueadero.nombre);
                marker.on('click', function() {
                    document.getElementById('buscar').value = parqueadero.nombre;
                    
                });
            });
        });

        // Inicializar el mapa cuando se carga la página
        initMap();
    </script>
    <script>
        // Obtener el valor de la placa de la URL
        var placa = '{{ request()->query('placa') }}';
        var vehiculo_id = '{{ request()->query('vehiculo') }}';
        // Asignar el valor de la placa al input "placaInput"
        document.getElementById('placaInput').value = placa;
        document.getElementById('vehiculoid').value = vehiculo_id;
    </script>


    
</x-app-layout>