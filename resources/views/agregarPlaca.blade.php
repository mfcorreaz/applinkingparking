<x-app-layout>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Vehículo</title>
    <!-- Enlace a los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Agregar Vehículo</h2>
                <form action="{{ route('guardar-vehiculo') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="placa" class="form-label">Placa</label>
                        <input type="text" class="form-control" id="placa" name="placa" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_vehiculo_id" class="form-label">Tipo de Vehículo</label>
                        <select class="form-select" id="tipo_vehiculo_id" name="tipo_vehiculo_id" required>
                            @foreach ($tiposVehiculos as $tipoVehiculo)
                                <option value="{{ $tipoVehiculo->id }}">{{ $tipoVehiculo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="color_id" class="form-label">Color</label>
                        <select class="form-select" id="color_id" name="color_id" required>
                            @foreach ($colores as $color)
                                <option value="{{ $color->id }}">{{ $color->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="marca_id" class="form-label">Marca</label>
                        <select class="form-select" id="marca_id" name="marca_id" required>
                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="modelo_id" class="form-label">Modelo</label>
                        <select class="form-select" id="modelo_id" name="modelo_id" required>
                            @foreach ($modelos as $modelo)
                                <option value="{{ $modelo->id }}">{{ $modelo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                        <a href="" class="btn btn-secondary">Volver</a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


</x-app-layout>