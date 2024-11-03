<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'codigo_barras',
        'id_categoria',
        'precio_compra',
        'precio_venta',
        'stock',
        'stock_minimo',
        'fecha_expiracion',
        'estado',
    ];

    // Relación con categoría (muchos a uno)
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    // Relación uno a muchos con DetalleVenta
    public function detalleVentas()
    {
        return $this->hasMany(DetalleVenta::class, 'id_producto');
    }

    // Relación uno a muchos con DetalleCompra
    public function detalleCompras()
    {
        return $this->hasMany(DetalleCompra::class, 'id_producto');
    }

    // Relación uno a muchos con MovimientoInventario
    public function movimientosInventario()
    {
        return $this->hasMany(MovimientoInventario::class, 'id_producto');
    }

      // Deshabilitar las marcas de tiempo automáticas
      public $timestamps = false;
}
