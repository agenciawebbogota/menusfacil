<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Menu;
use App\User;

class MenuController extends Controller
{
    public function index(){


		

    	$usuarioAuth= Auth::id();
		// $user = User::find(Auth::id());		
  //   	$menus = $user->menus;
		return(Menu::all());

    }

	public function create(Request $request){
		// $user = $request->user();
		$menu = Menu::create([
		            'user_id' => 1,
		            'nombre' => $request->input('nombre'),
		            'descripcion' => $request->input('descripcion'),
		            'precio' => $request->input('precio'),
		            'estado'=>1
		        ]);
		        return($menu);


    }


}
