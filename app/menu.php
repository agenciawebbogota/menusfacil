<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $fillable = [
        'user_id','nombre', 'descripcion', 'precio','estado'
    ];
    
}
