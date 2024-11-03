@extends('layouts.app')

@section('content')
    <h1>Detalles de la Categoría</h1>

    <p><strong>ID:</strong> {{ $categoria->id }}</p>
    <p><strong>Nombre:</strong> {{ $categoria->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $categoria->descripcion }}</p>

    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver</a>
@endsection
