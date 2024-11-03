@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Usuario</h1>

    <div class="card">
        <div class="card-header">
            {{ $usuario->nombre }}
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
            <p><strong>Rol:</strong> {{ $usuario->rol }}</p>
            <p><strong>Fecha de Creación:</strong> {{ $usuario->fecha_creacion }}</p>
            <p><strong>Última Actualización:</strong> {{ $usuario->fecha_actualizacion}}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</button>
            </form>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
</div>
@endsection
