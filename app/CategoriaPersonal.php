<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaPersonal extends Model
{
    protected $table = 'categoria_personal';

    protected $fillable = [
      'id_Categoria_Personal', 'Alta_Categoria_Personal', 'Nombre_Categoria_Personal', 'Descripcion_Categoria_Personal',
    ];

    protected $hidden = [
        'created_at', 'update_at',
    ];
}
