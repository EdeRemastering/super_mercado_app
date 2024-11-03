@extends('layouts.app')

@section('content')
    <h1>Lista de Proveedores</h1>

    <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Agregar Proveedor</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Correo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>{{ $proveedor->correo }}</td>
                    <td>{{ $proveedor->estado ? 'Activo' : 'Inactivo' }}</td>
                    <td>
                        <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
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
