<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'dni',
        'direccion',
        'telefono',
        'correo',
        'puntos',
        'estado',
    ];

      // Deshabilitar las marcas de tiempo automáticas
      public $timestamps = false;
}
