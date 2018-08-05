<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\User;
class InicioController extends Controller
{
   public function index($url){
   		$usuario = User::all()->where('url', $url);
	   	if(count($usuario)){
	   		$menus;
	   		foreach ($usuario as  $value) {
	   			$menus = User::find($value->id)->menus;
	   		}
			return view('usuario.index', [
				'empresa' => $usuario,
				'menus' => $menus,
			]);
	    }else{
	    	dd('Enviar una vista de publicidad si la empresa no existe..');
	    }
	}
}
