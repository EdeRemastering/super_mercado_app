<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'correo',
        'contraseña',
        'rol',
        'telefono',
        'direccion',
        'estado',
    ];

    protected $hidden = [
        'contraseña',
    ];

    // Relación uno a muchos: un usuario puede tener muchas ventas
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_usuario');
    }

    // Relación uno a muchos: un usuario puede tener muchas compras
    public function compras()
    {
        return $this->hasMany(Compra::class, 'id_usuario');
    }

    // Relación uno a muchos: un usuario puede tener muchos movimientos de inventario
    public function movimientosInventario()
    {
        return $this->hasMany(MovimientoInventario::class, 'id_usuario');
    }

      // Deshabilitar las marcas de tiempo automáticas
      public $timestamps = false;
}

