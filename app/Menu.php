<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'estado', 'user_id',  'activo', 'adicional', 'imagen'
    ];

	


}
