<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SuperusuarioController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');

  }

  public function index()
  {
    // Conseguimos el objeto
    $usuario=User::where('id', '=', \Auth::id())->first();
    if($usuario->tipo_usuario === 'SUPERUSUARIO'){
      return view('super_usuario.index');
    }else{
      return redirect('/dashboard');
    }
  }

  public function get()
  {
    // Conseguimos el objeto
    $usuario=User::where('id', '=', \Auth::id())->first();
    if($usuario->tipo_usuario === 'SUPERUSUARIO'){
      // Retornar los usuarios
      return User::all()->where('id','!=',  \Auth::id());
    }else{
      return redirect('/dashboard');
    }
  }

  public function actualizardias(){
    $usuario=User::where('id', '=', \Auth::id())->first();
    if($usuario->tipo_usuario === 'SUPERUSUARIO'){
      // return view('super_usuario.index');
      // Inicio de sentencias para el bloqueo de los usuarios al momento de la suscripción.
          $user_id = \Auth::id();
          $usuarios = \App\User::where('id','!=', $user_id)->get();

          foreach ($usuarios as $usuario) {
            $inicio = $usuario->created_at;
            $fin = '2018/09/18';
            #date("Y/m/d");
            $dias = $this->diferenciaDias($inicio, $fin);
            if($dias > 0){
              if($dias == 13 || $dias == 11){
                if($usuario->estado_empresa == "GRATIS"){
                  return 'Enviar correo electrónico informando a la empresa que está llegando a la caducidad de la suscripción de prueba., han pasado '.$dias.' días.';
                }else{
                  return 'Almacenar en la base de datos el número de días, es un usuario que ya está pagando., han pasado '.$dias.' días.';
                }
              }else if($dias > 13 and $usuario->estado_empresa == "GRATIS"){
                if($usuario->bloqueado == 'NO'){
                  return 'Bloquear usuario, cambiar el valor de la columna bloqueado a "SI", han pasado '.$dias.' días.';
                }
              }else if($dias == 28){
                return 'Enviar correo electrónico informando a la empresa que el día siguiente se termina la suscripción de pago., han pasado '.$dias.' días.';
              }else{
                return 'Almacenar en la base de datos el número de días, han pasado '.$dias. ' días';
              }
            }
          }

        // FIn de sentencias para el bloqueo de los usuarios al momento de la suscripción, sólo pasar estas instrucciones en donde se quieren ejecutar y tomar las acciones indicadas en los echos

    }else{
      return redirect('/dashboard');
    }
  }

  public function diferenciaDias($inicio, $fin)
  {
      $inicio = strtotime($inicio);
      $fin = strtotime($fin);
      $dif = $fin - $inicio;
      $diasFalt = (( ( $dif / 60 ) / 60 ) / 24);
      return ceil($diasFalt);
  }
}
