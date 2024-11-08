@extends('layouts.app')

@section('content')
    <h1>Editar Categoría</h1>

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ $categoria->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" name="descripcion">{{ $categoria->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Categoría</button>
    </form>
@endsection
