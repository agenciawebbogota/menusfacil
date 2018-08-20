<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
            ->where('pedidos.user_id', \Auth::id())
            ->join('menus', 'pedidos.menu_pedido', '=', 'menus.id')
            ->whereDate('pedidos.created_at', '=', Carbon::now()->format('Y-m-d'))
            ->select('pedidos.*', 'menus.nombre as nombre_pedido', 'menus.descripcion', 'menus.precio')
            ->orderBy('id', 'DESC')
            // ->limit(10)
            ->get();
				$adiciones = DB::table('pedidos')
            ->where('pedidos.user_id', \Auth::id())
            ->join('menus', 'pedidos.adicional_pedido', '=', 'menus.id')
            ->whereDate('pedidos.created_at', '=', Carbon::now()->format('Y-m-d'))
            ->select('pedidos.*', 'menus.nombre as nombre_pedido', 'menus.descripcion', 'menus.precio', 'menus.adicional')
            ->orderBy('id', 'DESC')
            // ->limit(10)
            ->get();

					// Inicio de sentencias para el calculos del menú mas vendido
						$user_id = \Auth::id();
						$mvendidos = DB::select("SELECT menu_pedido, COUNT(menu_pedido) cantidad
				    FROM pedidos WHERE (user_id= $user_id)
				    GROUP BY menu_pedido
				    ORDER BY cantidad
				    DESC LIMIT 1");
				    $idmvendidos = $mvendidos[0]->menu_pedido;
				    $masvendido = DB::select("SELECT nombre FROM menus WHERE id=$idmvendidos ");

						// Fin de instrucciones para obtener el más vendido de la semana

						$total = 0;
						$pedido = [];
						foreach ($menus as $menu) {
							array_push($pedido, $menu);
						}
						foreach($adiciones as $adicion){
							array_push($pedido, $adicion);
						}
						foreach($pedido as $ped){
							$total = $ped->precio + $total;
						}
		        return(
							[
							'pedidos' => $menus,
							'masvendido' => $masvendido[0]->nombre,
							'cantidad_vendida' => $mvendidos[0]->cantidad,
							'total' => $total,
						]


							);
    }
    public function create(Request $request){
			$menus = $request->input('menu_pedido');
			// echo($menus);
			foreach($menus as $menu){
				$pedido = Pedido::create([
					'nombre' => $request->input('nombre'),
					'correo' => $request->input('correo'),
					'telefono' => $request->input('telefono'),
					'direccion' => $request->input('direccion'),
					'observaciones' => $request->input('observaciones'),
					// 'adicional_pedido' => $request->input('adicional_pedido'),
					'menu_pedido'=> $menu,
					'user_id' => $request->input('user_id'),
				]);

			}
			return $menus;
    }










    public function pdf(){
         $menus = DB::table('pedidos')
            ->where('pedidos.user_id', \Auth::id())
            ->join('menus', 'pedidos.menu_pedido', '=', 'menus.id')
			->whereDate('pedidos.created_at', '=', Carbon::now()->format('Y-m-d'))
            ->select('pedidos.*', 'menus.nombre as nombre_menu', 'menus.descripcion', 'menus.precio')
            ->orderBy('id', 'ASC')
            ->get();
        $adicionales = DB::table('pedidos')
            ->where('pedidos.user_id', \Auth::id())
            ->join('menus', 'pedidos.adicional_pedido', '=', 'menus.id')
						->whereDate('pedidos.created_at', '=', Carbon::now()->format('Y-m-d'))
            ->select('pedidos.*', 'menus.nombre as nombre_adicional', 'menus.descripcion', 'menus.precio')
            ->orderBy('id', 'ASC')
            ->get();
        $view =  \View::make('pdf.pedidos', compact('menus', 'adicionales'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('a4', 'landscape');
        return $pdf->stream('Nombre_Personalizado_PDF');

    }


}
