<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pedido;
use App\Menu;

class PedidoController extends Controller
{

	public function getMenusDia(){
    	$menus = Menu::all();
    	return $menus;
    }

    public function getAdicionalesDia(){
    	$adicionales = Menu::all();
    	return $adicionales;
    }

    public function index(){
        $menus = Menu::all();
        // return $menus;

        return view('index',[
            'menus' => $menus,
        ]);
    }
    public function get(){
        $pedidos = DB::table('pedidos')
            ->join('menus', 'pedidos.menu_pedido', '=', 'menus.id')
            ->select('menus.*', 'pedidos.nombre as nombre_pedido', 'pedidos.correo', 'pedidos.telefono')
            ->get();
        $adicional = DB::table('pedidos')
            ->join('menus', 'pedidos.adicional_pedido', '=', 'menus.id')
            ->select('menus.*', 'pedidos.nombre as nombre_pedido', 'pedidos.correo', 'pedidos.telefono')
            ->get();


            dd($pedidos, $adicional);
    }


    public function create(Request $request){
        $pedido = Pedido::create([
                'nombre' => $request->input('nombre'),
                'correo' => $request->input('correo'),
                'telefono' => $request->input('telefono'),
                'adicional_pedido' => $request->input('adicionalPedido'),
                'menu_pedido'=>$request->input('menuPedido')
            ]);
            return $pedido;
    }

    
}
