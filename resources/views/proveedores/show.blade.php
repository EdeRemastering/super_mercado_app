@extends('layouts.app')

@section('content')
    <h1>Detalles del Proveedor</h1>

    <div class="mb-3">
        <label for="nombre" class="form-label"><strong>Nombre:</strong></label>
        <p>{{ $proveedor->nombre }}</p>
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label"><strong>Teléfono:</strong></label>
        <p>{{ $proveedor->telefono ?? 'No disponible' }}</p>
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label"><strong>Dirección:</strong></label>
        <p>{{ $proveedor->direccion ?? 'No disponible' }}</p>
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label"><strong>Correo:</strong></label>
        <p>{{ $proveedor->correo ?? 'No disponible' }}</p>
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label"><strong>Estado:</strong></label>
        <p>{{ $proveedor->estado ? 'Activo' : 'Inactivo' }}</p>
    </div>

    <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Volver a la lista de Proveedores</a>
    <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-warning">Editar Proveedor</a>
    
    <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar Proveedor</button>
    </form>
@endsection
