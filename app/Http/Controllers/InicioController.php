<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Menu;
use App\User;
use Mail;
class InicioController extends Controller
{
   public function index($url){
   		$usuarios = User::all()->where('url', $url);
      foreach($usuarios as $usuario){
        if($usuario){
          // Validar si el usuaro está bloqueado.
          if($usuario->bloqueado == 'SI'){
            return redirect('/');
          }else{
            $menus;
              $menus = User::find($usuario->id)->menus;
            return view('usuario.index', [
              'empresa' => $usuario,
              'menus' => $menus,
            ]);

          }
        }else{
          dd('Enviar una vista de publicidad si la empresa no existe..');
        }
      }
	}

// Pruebas ////////

  public function diferenciaDias($inicio, $fin){
        $inicio = strtotime($inicio);
        $fin = strtotime($fin);
        $dif = $fin - $inicio;
        $diasFalt = (( ( $dif / 60 ) / 60 ) / 24);
        return ceil($diasFalt);
    }
  public function doc(){
    return view('doc.index');
  }

  public function confirmacion($correo, $id){
    $user = User::all()->where('id', $id)->where('email', $correo);
    if(count($user) == 1 AND $user[0]->confirmado == 'NO'){
      $userupdate = User::where('id', $user[0]->id)->update([
        'confirmado' => 'SI'
      ]);
      Mail::send('correos/confirmacionsuscripcion', ['user' => $user[0]], function($msj)
      {
        $msj->subject('Notificar a usuario Menús Fácil.');
        $msj->to('app.menusfacil@gmail.com');
      });
      return redirect('/dashboard');
    }else{
      return redirect('/dashboard');
    }

  }



}
