@extends('layouts.app')

@section('content')
    <h1>Editar Proveedor</h1>

    <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ $proveedor->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" value="{{ $proveedor->telefono }}">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" value="{{ $proveedor->direccion }}">
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" name="correo" value="{{ $proveedor->correo }}">
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-control" name="estado" required>
                <option value="1" {{ $proveedor->estado ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ !$proveedor->estado ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Proveedor</button>
    </form>
@endsection
