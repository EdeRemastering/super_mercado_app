@extends('layouts.app')

@section('content')
<h1>Detalles de la Venta</h1>

<p><strong>ID:</strong> {{ $venta->id }}</p>
<p><strong>Vendedor:</strong> {{ $venta->id_usuario }}</p>
<p><strong>Total:</strong> {{ $venta->total }}</p>
<p><strong>Tipo de Pago:</strong> {{ $venta->tipo_pago }}</p>
<p><strong>Estado:</strong> {{ $venta->estado ? 'Activo' : 'Inactivo' }}</p>
<p><strong>Fecha de Venta:</strong> {{ $venta->fecha_venta }}</p>
<p><strong>Observaciones:</strong> {{ $venta->observaciones }}</p>

<a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-warning">Editar</a>
<a href="{{ route('ventas.index') }}" class="btn btn-secondary">Volver</a>
@endsection