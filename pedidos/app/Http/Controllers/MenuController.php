<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\menu;

class MenuController extends Controller
{
    public function index(){
    	$menus = menu::find(1);
    	$user = Auth::user();
    	return $menus;
    	// menu::orderBy('id', 'DESC')->get();
    	// return $user;
    }

	public function create(Request $request){
		$user = $request->user();
		$menu = menu::create([
		            'user_id' => $user->id,
		            'nombre' => $request->input('nombre'),
		            'descripcion' => $request->input('descripcion'),
		            'precio' => $request->input('precio'),
		            'estado'=>true
		        ]);
		        return $user;


    }


}
