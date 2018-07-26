<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Menu;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
class MenuController extends Controller
{
    //
	public function index(){
		$menus = Menu::all()->where('activo', 1)->where('user_id', Auth::id());
    	return [
    		'menus' => $menus,
    	 	'total'=> count($menus),
    	];
    }

    public function create(Request $request){
		$user = $request->user();
		if(Auth::id()){
			$menu = menu::create([
	            'user_id' => Auth::id(),
	            'nombre' => $request->input('nombre'),
	            'descripcion' => $request->input('descripcion'),
	            'precio' => $request->input('precio'),
	            'adicional' => $request->input('adicional'),
	            'estado'=>$request->input('estado')
	        ]);
	        return $menu;
		}else{
			return 'No tienes acceso';
		}
    }

    public function update(Request $request){
    	if ($request->input('estado')) {
    		$estado = 1;
    	}else{
    		$estado = 0;
    	}
    	$menu = Menu::where('id', $request->input('id'))->update([
			'nombre' => $request->input('nombre'),
			'descripcion' => $request->input('descripcion'),
			'precio' => $request->input('precio'),
			'estado' => $estado,
			'activo' => true,
		]);
		return $menu;
    }

    public function delete($id){
    	$menu = Menu::find($id);
		// dd($producto);
		if($menu->delete()){
			return 'Producto Eliminado';
			// return $id;
		}

    }

    public function updateEstado(Request $request){
    	Menu::where('id', $request->input('id'))->update([
			'nombre' => $request->input('nombre'),
			'descripcion' => $request->input('descripcion'),
			'precio' => $request->input('precio'),
			'activo' => false,
			'estado' => false,
		]);
		return 'Se ha eliminado el Menu.';
    }


    public function pdf(){
    	$menus = Menu::all()->where('activo', 1)->where('user_id', \Auth::id());

    		$view =  \View::make('pdf.menuscreados', compact('menus'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Nombre_Personalizado_PDF');
    }

		public function historicomenus($url){
			$empresa = User::all()->where('url', $url);
	   	if(count($empresa)){
	   		$menus;
	   		foreach ($empresa as  $value) {
	   			$menus = User::find($value->id)->menus;
	   		}

				$view =  \View::make('pdf.historicomenus', compact('menus', 'empresa'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Nombre_Personalizado_PDF');


			// return view('pdf.historicomenus', [
			// 	'empresa' => $empresa,
			// 	'menus' => $menus,
			// ]);
	    }else{
	    	dd('Enviar una vista de publicidad si la empresa no existe..');
	    }
		}


}
