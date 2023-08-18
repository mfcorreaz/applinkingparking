<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <div class="caca">

  <!-- Contenedor del mapa -->
<div id="map" style="height: 400px;"></div>

<!-- Select para elegir la distancia a la redonda -->
<div class="actua text-center">
    <select id="radioSelect" class="form-select form-select-lg mb-3">
        <option value="0.2">2 Cuadras</option>
        <option value="0.3">3 Cuadras</option>
        <option value="0.4">4 Cuadras</option>
        <!-- Agrega aquí las demás opciones del select según tus necesidades -->
    </select>
    <button class="btn btn-primary" onclick="actualizarParqueaderos()">Actualizar</button>
</div>

<script>
    function initMap() {
        // El código para inicializar el mapa y mostrar la ubicación del usuario
        // ...

        // Obtener los parqueaderos cercanos mediante Ajax
        var distanciaSeleccionada = 1; // Coloca aquí la distancia seleccionada por defecto (puedes cambiarla según tus necesidades)
        actualizarParqueaderos(distanciaSeleccionada);

        // Función para agregar un marcador en el mapa
        function addMarker(lat, lng, title) {
            L.marker([lat, lng]).addTo(map).bindPopup(title);
        }

        // Función para actualizar los parqueaderos cercanos según la distancia seleccionada
        function actualizarParqueaderos() {
            var distanciaSeleccionada = document.getElementById('radioSelect').value;

            // Realizar una solicitud Ajax para obtener los parqueaderos cercanos
            fetch(`/getParqueaderosCercanos/${distanciaSeleccionada}`)
                .then(response => response.json())
                .then(data => {
                    // Limpiar los marcadores actuales
                    map.eachLayer(layer => {
                        if (layer instanceof L.Marker) {
                            map.removeLayer(layer);
                        }
                    });

                    // Agregar los nuevos marcadores de los parqueaderos cercanos
                    data.forEach(parqueadero => {
                        addMarker(parqueadero.latitud, parqueadero.longitud, parqueadero.nombre);
                    });
                })
                .catch(error => {
                    console.error('Error al obtener los parqueaderos cercanos:', error);
                });
        }

        // Manejar el evento de cambio del select para actualizar los parqueaderos cercanos
        var select = document.getElementById('radioSelect');
        select.addEventListener('change', actualizarParqueaderos);
    }

    // Inicializar el mapa cuando se carga la página
    initMap();
</script>





    </div>    
</x-app-layout>
