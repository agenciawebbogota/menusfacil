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
		$menus = Menu::all();
    	return $menus;
    }

    public function create(Request $request){
		// $user = $request->user();
		$menu = menu::create([
		            'user_id' => Auth::id(),
		            'nombre' => $request->input('nombre'),
		            'descripcion' => $request->input('descripcion'),
		            'precio' => $request->input('precio'),
		            'estado'=>$request->input('estado')
		        ]);
		        return $menu;
    }


}
