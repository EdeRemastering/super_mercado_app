@extends('layouts.app')

@section('content')
    <h1>Ventas</h1>
    <a href="{{ route('ventas.create') }}" class="btn btn-primary">Agregar Nueva Venta</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Usuario</th>
                <th>Total</th>
                <th>Tipo de Pago</th>
                <th>Estado</th>
                <th>Fecha de Venta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->id_usuario }}</td>
                    <td>{{ $venta->total }}</td>
                    <td>{{ $venta->tipo_pago }}</td>
                    <td>{{ $venta->estado ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $venta->fecha_venta }}</td>
                    <td>
                        <a href="{{ route('ventas.show', $venta->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
