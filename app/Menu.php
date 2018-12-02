<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'estado', 'user_id',  'activo', 'adicional', 'imagen'
    ];

	
    // public function user(){
    //     return $this->belo('App\User');
    // }


    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
