<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Menu;
use Mail;
use DateTime;

class SuperusuarioController extends Controller
{
  public $email;
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
    // Conseguimos el objeto
    $usuario = User::where('id', '=', \Auth::id())->first();
    if($usuario->tipo_usuario === 'SUPERUSUARIO'){
      return view('super_usuario.index');
    }else{
      return redirect('/dashboard');
    }
  }

  public function get()
  {
    // Conseguimos el objeto
    $usuario = User::where('id', '=', \Auth::id())->first();
    if($usuario->tipo_usuario === 'SUPERUSUARIO'){
      // Retornar los usuarios
      return User::all()->where('id','!=',  \Auth::id());
    }else{
      return redirect('/dashboard');
    }
  }



  public function actualizardias(){
      return 'No hay nada por hacer, ya se programó en Cron.'; 
  }

  public function updateUser(Request $request){
    $usuario = User::where('id', $request->input('id'))->update([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'url' => $request->input('url'),
      'color1' => $request->input('color1'),
      'color2' => $request->input('color2'),
      'color3' => $request->input('color3'),
      'created_at' => $request->input('created_at'),
      'estado_empresa' => $request->input('estado_empresa'),
      'bloqueado' => $request->input('bloqueado'),
      'dias' => $request->input('dias'),
    ]);
    return $usuario;
  }
 public function menus()
 {
  $menus = Menu::with('user')->get()->where('id', '!=', \Auth::id());
  return view('super_usuario.menus', compact('menus'))->render();
 }
  
}
