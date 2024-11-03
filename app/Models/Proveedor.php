<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $fillable = [
        'nombre',
        'ruc',
        'direccion',
        'telefono',
        'correo',
        'estado',
    ];

    public function compras()
    {
        return $this->hasMany(Compra::class, 'id_proveedor');
    }

      // Deshabilitar las marcas de tiempo automáticas
      public $timestamps = false;
}
