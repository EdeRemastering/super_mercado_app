@extends('layouts.app')

@section('content')
    <h1>Detalles del Cliente</h1>

    <div class="mb-3">
        <label for="nombre" class="form-label"><strong>Nombre:</strong></label>
        <p>{{ $cliente->nombre }}</p>
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label"><strong>Teléfono:</strong></label>
        <p>{{ $cliente->telefono ?? 'No disponible' }}</p>
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label"><strong>Dirección:</strong></label>
        <p>{{ $cliente->direccion ?? 'No disponible' }}</p>
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label"><strong>Correo:</strong></label>
        <p>{{ $cliente->correo ?? 'No disponible' }}</p>
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label"><strong>Estado:</strong></label>
        <p>{{ $cliente->estado ? 'Activo' : 'Inactivo' }}</p>
    </div>

    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver a la lista de Clientes</a>
    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar Cliente</a>
    
    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar Cliente</button>
    </form>
@endsection
