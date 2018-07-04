<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class MenuController extends Controller
{
    //
	public function index(){
    	$menus = Menu::all();
    	// $user = Auth::user();
    	return $menus;
    	// menu::orderBy('id', 'DESC')->get();
    	// return $user;
    }


}
