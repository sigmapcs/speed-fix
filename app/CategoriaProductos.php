<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaProductos extends Model
{
    protected $table = 'categoria_productos';

    protected $fillable = [
      'id_Categoria_Producto', 'Alta_Categoria_Producto`', 'Nombre_Categoria_Producto', 'Descripcion_Categoria_Producto',
    ];

    protected $hidden = [
        'created_at', 'update_at',
    ];
}
