<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    
}
