<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partnert extends Model
{
    //
    protected $fillable = [
        'nombre', 'estado', 'correo', 'telefono', 'id'
    ];


    // public function users(){
    //   return $this->hasMany('App\User');
    // }
}
