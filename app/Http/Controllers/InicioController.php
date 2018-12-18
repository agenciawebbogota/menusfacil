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
  public function doc(){
    return view('doc.index');
  }
// Funció para confirmación de los usuarios vía email
  public $email;
  public function confirmacion($correo, $id){
    $user = User::all()->where('id', $id)->where('email', $correo)->first();
    if($user->confirmado == 'NO'){
      $userupdate = User::where('id', $user->id)->update([
        'confirmado' => 'SI'
      ]);

      $this->email = $user->email;
      Mail::send('correos/alregistrarse1', ['user' => $user], function($msj)
      {
        $msj->subject('Todo listo');
        $msj->to($this->email);
        $msj->bcc(['app.menusfacil@gmail.com']);
      });
      return view('usuario.confirmacion', ['user' => $user]);
    }else{
      // return view('usuario.confirmacion', ['user' => $user]);
      return redirect('/dashboard');
    }
  }









  public function prueba(){
    Mail::send('correos/alregistrarse1', ['user' => 'algo'], function($msj)
      {
        $msj->subject('Por favor confirma tu suscripción a Menús Fácil.');
        $msj->to('whary11@gmail.com');
        // $msj->bcc(['app.menusfacil@gmail.com']);
      });

      return 'Mensaje enviado con éxito';
  }
}
