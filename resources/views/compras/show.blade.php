@extends('layouts.app')

@section('content')
    <h1>Detalles de la Compra</h1>

    <div class="mb-3">
        <label for="id_usuario" class="form-label"><strong>ID Usuario:</strong></label>
        <p>{{ $compra->id_usuario }}</p>
    </div>
    <div class="mb-3">
        <label for="id_proveedor" class="form-label"><strong>ID Proveedor:</strong></label>
        <p>{{ $compra->id_proveedor }}</p>
    </div>
    <div class="mb-3">
        <label for="total" class="form-label"><strong>Total:</strong></label>
        <p>{{ $compra->total }}</p>
    </div>
    <div class="mb-3">
        <label for="tipo_pago" class="form-label"><strong>Tipo de Pago:</strong></label>
        <p>{{ $compra->tipo_pago }}</p>
    </div>
    <div class="mb-3">
        <label for="fecha_compra" class="form-label"><strong>Fecha de Compra:</strong></label>
        <p>{{ $compra->fecha_compra }}</p>
    </div>

    <a href="{{ route('compras.index') }}" class="btn btn-secondary">Volver a la lista de Compras</a>
    <a href="{{ route('compras.edit', $compra->id) }}" class="btn btn-warning">Editar Compra</a>
    
    <form action="{{ route('compras.destroy', $compra->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar Compra</button>
    </form>
@endsection
