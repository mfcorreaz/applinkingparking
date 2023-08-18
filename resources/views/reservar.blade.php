<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="caca">
        <div class="center-content-reservas">
            <button id="btn-get-location">Obtener ubicación actual</button>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('realizar_reserva', ['placa' => request()->query('placa')]) }}" method="post">
    @csrf
    <div class="center-content-reservas">
        <div class="label_parqueaderos">
           Elija el Estacionamiento
        </div>
        <div class="select-container">
            <select id="parqueadero" name="parqueadero_id" class="select">
                @foreach($parqueaderos as $parqueadero)
                    <option value="{{ $parqueadero->id }}"
                            data-lat="{{ $parqueadero->latitud }}"
                            data-lng="{{ $parqueadero->longitud }}">
                        {{ $parqueadero->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div id="mensaje-no-cercanos" style="display: none;">
        No hay parqueaderos cercanos en un radio de 1 km.
    </div>

    <div class="btn-container">
        
        <button type="submit" id="btn-reservar" class=" btn-reservar">Reservar</button>
        <button id="btn-volver" class=" btn-volver">Volver</button>
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

        <script>
            // Evento para obtener la ubicación actual cuando se hace clic en el botón
            document.getElementById('btn-get-location').addEventListener('click', () => {
                // Verificar si el navegador es compatible con la geolocalización
                if ("geolocation" in navigator) {
                    // Obtener la ubicación actual del usuario
                        navigator.geolocation.getCurrentPosition(
                            (position) => {
                                const userLatitude = position.coords.latitude;
                                const userLongitude = position.coords.longitude;

                                // Función para calcular la distancia Haversine entre dos coordenadas
                                function calculateDistance(lat1, lon1, lat2, lon2) {
                                    const earthRadius = 6371; // Radio de la Tierra en kilómetros
                                    const dLat = toRadians(lat2 - lat1);
                                    const dLon = toRadians(lon2 - lon1);

                                    const a =
                                        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                                        Math.cos(toRadians(lat1)) * Math.cos(toRadians(lat2)) *
                                        Math.sin(dLon / 2) * Math.sin(dLon / 2);

                                    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                                    const distance = earthRadius * c;

                                    return distance;
                                }

                                // Función auxiliar para convertir grados a radianes
                                function toRadians(degrees) {
                                    return degrees * (Math.PI / 180);
                                }

                                // Función para filtrar y actualizar los parqueaderos cercanos en el select
                                function updateNearbyParking(userLat, userLng) {
                                    // Obtener el select y su lista de opciones
                                    const selectElement = document.getElementById('parqueadero');
                                    const options = selectElement.getElementsByTagName('option');

                                    // Iterar sobre las opciones para calcular la distancia a cada parqueadero
                                    let cercanos = false;
                                    for (const option of options) {
                                        const lat = parseFloat(option.getAttribute('data-lat'));
                                        const lng = parseFloat(option.getAttribute('data-lng'));
                                        const distance = calculateDistance(userLat, userLng, lat, lng);

                                        // Opcionalmente, puedes mostrar la distancia en el texto de cada opción
                                        option.textContent = `${option.textContent} (${distance.toFixed(2)} km)`;

                                        // Si la distancia es menor o igual a 1 km, mostrar la opción
                                        if (distance <= 4) {
                                            option.style.display = 'block';
                                            cercanos = true;
                                        } else {
                                            option.style.display = 'none';
                                        }
                                    }

                                    // Mostrar un mensaje si no hay parqueaderos cercanos
                                    document.getElementById('mensaje-no-cercanos').style.display = cercanos ? 'none' : 'block';
                                }

                                // Llamar a la función para actualizar los parqueaderos cercanos en el select
                                updateNearbyParking(userLatitude, userLongitude);
                            },
                            (error) => {
                                console.error("Error al obtener la ubicación:", error);
                            }
                        );
                    } else {
                        console.error("Geolocalización no disponible en este navegador.");
                    }
                });
        </script>

<script>
    // Evento para obtener las tarifas del parqueadero seleccionado
    document.getElementById('parqueadero').addEventListener('click', () => {
        const parqueaderoId = document.getElementById('parqueadero').value;

        // Realizar una petición Ajax al servidor para obtener las tarifas del parqueadero seleccionado
        fetch(`/obtenerTarifas/${parqueaderoId}`)
            .then(response => response.json())
            .then(data => {
                // Limpiar el select de tarifas
                const tarifaSelect = document.getElementById('tarifa');
                tarifaSelect.innerHTML = '';

                // Agregar las nuevas opciones al select de tarifas
                data.forEach(tarifa => {
                    const option = document.createElement('option');
                    option.value = tarifa.id;
                    option.textContent = ' $' + tarifa.precio;
                    tarifaSelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error al obtener las tarifas:', error);
            });
    });
</script>


    </div>
</x-app-layout>
