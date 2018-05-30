<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaServicios extends Model
{
    protected $table = 'categoria_servicios';

    protected $fillable = [
      'id_Categoria_Servicio', 'Alta_Categoria_Servicio`', 'Nombre_Categoria_Servicio', 'Descripcion_Categoria_Servicio',
    ];

    protected $hidden = [
        'created_at', 'update_at',
    ];
}
