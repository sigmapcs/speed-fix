<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaProveedores extends Model
{
    protected $table = 'categoria_proveedores';

    protected $fillable = [
      'id_Categoria_Proveedor', 'Alta_Categoria_Proveedor`', 'Nombre_Categoria_Proveedor', 'Descripcion_Categoria_Proveedor',
    ];

    protected $hidden = [
        'created_at', 'update_at',
    ];
}
