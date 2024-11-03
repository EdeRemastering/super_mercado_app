@extends('layouts.app')

@section('content')
    <h1>Editar Compra</h1>

    <form action="{{ route('compras.update', $compra->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_usuario" class="form-label">ID Usuario</label>
            <input type="number" class="form-control" name="id_usuario" value="{{ $compra->id_usuario }}" required>
        </div>
        <div class="mb-3">
            <label for="id_proveedor" class="form-label">ID Proveedor</label>
            <input type="number" class="form-control" name="id_proveedor" value="{{ $compra->id_proveedor }}" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" class="form-control" name="total" value="{{ $compra->total }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="tipo_pago" class="form-label">Tipo de Pago</label>
            <input type="text" class="form-control" name="tipo_pago" value="{{ $compra->tipo_pago }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha_compra" class="form-label">Fecha de Compra</label>
            <input type="date" class="form-control" name="fecha_compra" value="{{ $compra->fecha_compra }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Compra</button>
    </form>
@endsection
