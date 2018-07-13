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
        $menus = DB::table('pedidos')
            ->join('menus', 'pedidos.menu_pedido', '=', 'menus.id')
            ->select('pedidos.*', 'menus.nombre as nombre_pedido', 'menus.descripcion', 'menus.precio')
            ->orderBy('created_at', 'ASC')
            ->limit(10)
            ->get();
        $adicional = DB::table('pedidos')
            ->join('menus', 'pedidos.adicional_pedido', '=', 'menus.id')
            ->select('pedidos.*', 'menus.nombre as nombre_pedido', 'menus.descripcion', 'menus.precio')
            ->orderBy('created_at', 'ASC')
            ->limit(10)
            ->get();

        return [
            'menus' => $menus,
            'adicional' => $adicional
        ];       
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

    public function pdf( ){
         $menus = DB::table('pedidos')
            ->join('menus', 'pedidos.menu_pedido', '=', 'menus.id')
            ->select('pedidos.*', 'menus.nombre as nombre_pedido', 'menus.descripcion', 'menus.precio')
            ->orderBy('created_at', 'ASC')
            // ->limit(10)
            ->get();
        $adicional = DB::table('pedidos')
            ->join('menus', 'pedidos.adicional_pedido', '=', 'menus.id')
            ->select('pedidos.*', 'menus.nombre as nombre_pedido', 'menus.descripcion', 'menus.precio')
            ->orderBy('created_at', 'ASC')
            // ->limit(10)
            ->get();

        $data = [
            'menus' => $menus,
            'adicional' => $adicional
        ];    

        $view =  \View::make('pdf.pedidos', compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4', 'landscape');
        return $pdf->stream('Nombre_Personalizado_PDF');

    }

    
}
