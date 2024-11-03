<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoInventario extends Model
{
    use HasFactory;

    protected $table = 'movimientos_inventario';

    protected $fillable = [
        'id_producto',
        'tipo_movimiento',
        'cantidad',
        'motivo',
        'id_referencia',
        'id_usuario',
        'fecha_movimiento',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

      // Deshabilitar las marcas de tiempo automáticas
      public $timestamps = false;
}
