@extends('layouts.app')

@section('content')
    <h1>Detalles del Producto</h1>

    <p><strong>ID:</strong> {{ $producto->id }}</p>
    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Código de Barras:</strong> {{ $producto->codigo_barras }}</p>
    <p><strong>Precio de Compra:</strong> {{ $producto->precio_compra }}</p>
    <p><strong>Precio de Venta:</strong> {{ $producto->precio_venta }}</p>
    <p><strong>Stock:</strong> {{ $producto->stock }}</p>
    <p><strong>Stock Mínimo:</strong> {{ $producto->stock_minimo }}</p>
    <p><strong>Fecha de Expiración:</strong> {{ $producto->fecha_expiracion }}</p>
    <p><strong>Estado:</strong> {{ $producto->estado ? 'Activo' : 'Inactivo' }}</p>

    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
@endsection
