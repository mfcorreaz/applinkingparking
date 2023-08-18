<tbody style="background-color: #f0f0f0;">
        @foreach ($registros as $registro)
        <tr>
            <td class="placa-cell {{ strlen($registro->vehiculo->placa) < 6 ? 'bg-danger text-white' : '' }} small-font">
                {{ strtoupper($registro->vehiculo->placa) }}
            </td>
            <td class="small-font">{{ date('H:i', strtotime($registro->fecha_entrada)) }}</td>
            <td class="small-font">{{ $registro->fecha_salida ? date('H:i', strtotime($registro->fecha_salida)) : 'NULL' }}</td>
            <td class="small-font">{{ $registro->precio }}</td>
            <td class="small-font">
                <div class="btn-group">
                    <a href="{{ route('registros.edit', $registro->id) }}" class="btn btn-success mr-2">Cobrar</a>
                    <a href="#" class="btn btn-primary mr-2">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </div>
            </td>
        </tr>
        @endforeach