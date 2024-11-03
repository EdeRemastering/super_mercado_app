@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
    <div class="row">
        <div class="col">
            <h4 class="font-weight-bolder">Editar Usuario</h4>
            <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $usuario->nombre }}" required>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo" id="correo" value="{{ $usuario->correo }}" required>
                </div>
                <div class="mb-3">
                    <label for="rol" class="form-label">Rol</label>
                    <select class="form-select" name="rol" id="rol">
                        <option value="cajero" {{ $usuario->rol == 'cajero' ? 'selected' : '' }}>Cajero</option>
                        <option value="encargado" {{ $usuario->rol == 'encargado' ? 'selected' : '' }}>Encargado</option>
                        <option value="admin" {{ $usuario->rol == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
