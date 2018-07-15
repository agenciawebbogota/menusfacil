<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	protected $fillable = [
        'nombre', 'correo', 'telefono', 'menu_pedido', 'adicional_pedido', 'direccion', 'observaciones' 
    ];








   // public function menus()
   //  {
   //      return $this->belongsToMany('App\Menu', 'menu_pedido', 'id');
   //  }
}
