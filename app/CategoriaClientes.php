<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaClientes extends Model
{
    protected $table = 'categoria_clientes';

    protected $fillable = [
      'id_Categoria_Cliente', 'Alta_Categoria_Cliente', 'Nombre_Categoria_Cliente', 'Descripcion_Categoria_Cliente',
    ];

    protected $hidden = [
        'created_at', 'update_at',
    ];
}
