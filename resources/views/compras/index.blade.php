@extends('layouts.app')

@section('content')
    <h1>Lista de Compras</h1>
    <a href="{{ route('compras.create') }}" class="btn btn-primary">Agregar Compra</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Usuario</th>
                <th>ID Proveedor</th>
                <th>Total</th>
                <th>Tipo de Pago</th>
                <th>Fecha de Compra</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compras as $compra)
                <tr>
                    <td>{{ $compra->id }}</td>
                    <td>{{ $compra->id_usuario }}</td>
                    <td>{{ $compra->id_proveedor }}</td>
                    <td>{{ $compra->total }}</td>
                    <td>{{ $compra->tipo_pago }}</td>
                    <td>{{ $compra->fecha_compra }}</td>
                    <td>
                        <a href="{{ route('compras.show', $compra->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('compras.edit', $compra->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('compras.destroy', $compra->id) }}" method="POST" style="display:inline;">
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
