<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado',
    ];

    // Relación uno a muchos: una categoría puede tener muchos productos
    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_categoria');
    }

      // Deshabilitar las marcas de tiempo automáticas
      public $timestamps = false;
}
