@extends('layouts.admin')

@section('titulo', 'Inicio')

@section('content')
    <div class="detalles">
        <div class="detalles__grafica">
            <h2 class="detalles__h2">Total usuarios registrados por mes</h2>
            <canvas id="total-usuarios"></canvas>
        </div>

        <div class="detalles__alquileres">
            <h2 class="detalles__h2">Últimos alquileres</h2>
            <table class="admin__table">
                <thead class="admin__thead">
                    <th class="admin__th">Usuario</th>
                    <th class="admin__th">isbn</th>
                    <th class="admin__th">Fecha de alquiler</th>
                    <th class="admin__th">Fecha de devolución</th>
                    <th class="admin__th">Precio de alquiler</th>
                </thead>
                <tbody>
                    @foreach ($alquileres as $item)
                        <tr class="admin__tbody-tr">
                            <td class="admin__td">{{ $item->codUsu }}</td>
                            <td class="admin__td">{{ $item->isbn }}</td>
                            <td class="admin__td">{{ $item->fecAlquiler }}</td>
                            <td class="admin__td">{{ $item->fecDevolucion }}</td>
                            <td class="admin__td">{{ $item->precioAlquiler }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $alquileres->links() }}
        </div>
    </div>

    <script>
        const datos = JSON.parse(`<?= $data ?>`);
    </script>
@endsection
