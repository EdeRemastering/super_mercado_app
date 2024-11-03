@extends('layouts.app')

@section('content')
    <h1>Agregar Nueva Venta</h1>

    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_usuario" class="form-label">ID Usuario</label>
            <input type="number" class="form-control" name="id_usuario" value="{{ auth()->id() }}" required readonly>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" step="0.01" class="form-control" name="total" required>
        </div>
        <div class="mb-3">
            <label for="tipo_pago" class="form-label">Tipo de Pago</label>
            <input type="text" class="form-control" name="tipo_pago" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-control" name="estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea class="form-control" name="observaciones"></textarea>
        </div>
        <div class="mb-3">
            <label for="fecha_venta" class="form-label">Fecha de Venta</label>
            <input type="date" class="form-control" name="fecha_venta" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Venta</button>
    </form>
@endsection
