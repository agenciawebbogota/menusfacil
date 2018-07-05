<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Menu;
use App\User;


class MenuController extends Controller
{
    //
	public function index(){
		$menus = Menu::all()->where('activo', 1);
    	return $menus;
    }

    public function create(Request $request){
		// $user = $request->user();
		if(Auth::id()){
			$menu = menu::create([
			            'user_id' => Auth::id(),
			            'nombre' => $request->input('nombre'),
			            'descripcion' => $request->input('descripcion'),
			            'precio' => $request->input('precio'),
			            'estado'=>$request->input('estado')
			        ]);
	        return $menu;
		}else{
			return 'No tienes acceso';
		}
    }

    public function update(Request $request){
    	Menu::where('id', $request->input('id'))->update([
			'nombre' => $request->input('nombre'),
			'descripcion' => $request->input('descripcion'),
			'precio' => $request->input('precio'),
			'estado' => $request->input('estado'),
			'activo' => true,
		]);
		return 'Se actualizó el menú.';
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


}
