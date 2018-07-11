<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;

class PedidoController extends Controller
{
	public function crearPedido(Request $request){
		$pedido = Pedido::create([
	        'nombre' => $request->input('nombre'),
	        'correo' => $request->input('correo'),
	        'telefono' => $request->input('telefono'),
			'menu_1' => $request->input('menu_1'),
			'menu_2' => $request->input('menu_2'),
			'menu_3' => $request->input('menu_3'),
			'menu_4' => $request->input('menu_4'),
			'menu_5' => $request->input('menu_5'),
			'menu_6' => $request->input('menu_6'),
			'menu_7' => $request->input('menu_7'),
			'menu_8' => $request->input('menu_8'),
			'adicional_1' => $request->input('adicional_1'),
			'adicional_2' => $request->input('adicional_2'),
			'adicional_3' => $request->input('adicional_3'),
			'adicional_4' => $request->input('adicional_4'),
			'adicional_5' => $request->input('adicional_5'),
			'adicional_6' => $request->input('adicional_6'),
			'adicional_7' => $request->input('adicional_7'),
			'adicional_8' => $request->input('adicional_8'),
    	]);
		return $pedido;
	}
    
}
