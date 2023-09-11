<x-app-layout>


    <div class="container text-center">
        <h1>Mis Vehículos</h1>
        <a href="{{ route('agregarPlaca', ['user_id' => Auth::user()->id]) }}" class="btn btn-primary mb-3">Agregar Vehículo</a>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Patente</th>
                    <th>Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($vehiculoIds as $vehiculoId)
            <tr>
                <td>{{ $vehiculoId->placa }}</td>
                <td>{{ $vehiculoId->marca->nombre }}</td>
                <td>
                    <button class="btn btn-success">Actualizar</button>
                    <button class="btn btn-primary">Ver</button>
                    <button class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    

</x-app-layout>