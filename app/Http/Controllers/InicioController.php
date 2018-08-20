<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
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
  public function doc(){
    return view('doc.index');
  }

  public function masvendido(){

    // $user_id = \Auth::id();
    //
    //
    // $mvendidos = DB::select("SELECT menu_pedido, COUNT(menu_pedido) cantidad
    // FROM pedidos WHERE (user_id= $user_id)
    // GROUP BY menu_pedido
    // ORDER BY cantidad
    // DESC LIMIT 1");
    // $idmvendidos = $mvendidos[0]->menu_pedido;
    // $masvendido = DB::select("SELECT nombre FROM menus WHERE id=$idmvendidos");
    //
    //
    // echo('El ménu más vendido es '.$masvendido[0]->nombre.' con '.$mvendidos[0]->cantidad." ventas.");
    dd(DB::table('users')->get());



    // dd($mvendidos[0]->maximo);



  }



}
