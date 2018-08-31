<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
    $user_id = \Auth::id();
    $user = User::where('id', '=', $user_id)->first();
    // if($user->tipo_usuario === 'SUPERUSUARIO'){
      if($user->tipo_usuario === 'SUPERUSUARIO'){
      // Inicio de sentencias para el bloqueo de los usuarios al momento de la suscripción.
          $usuarios = User::all()->where('id','!=', $user_id);

          foreach ($usuarios as $usuario) {
            // Verificar si el usuario está bloqueado
            if($usuario->bloqueado == "SI"){
              return 'El usuario está bloqueado';
            }else{
              $inicio = $usuario->fecha_creacion;
              $fin = date("Y/m/d");
              // dd($fin);
              $dias = $this->diferenciaDias($inicio, $fin);
              // Actualización en la base de datos
              $nuevosdias = $usuario->dias - 1;

              // Controlar que sólo sea actualizado una vez al día, programar en el cliente un reloj que ejecute esta acción a las 10 am
              User::where('id', $usuario->id)->update([
                'dias' => $nuevosdias,
        			]);
              $dias = User::where('id','=', $usuario->id)->first()->dias;
              if($dias == 3){
                // Notificar a todos los uausarios que le quedan tres días para que su suscripción sea bloqueada.
                Mail::send($ruta, [
                  'usuario' => $usuario,
                  'dias' => $dias,
                ], function($msj)
                {
                  $msj->subject('Recordatorio Ménus Fácil');
                  $msj->to($this->email);
                  $msj->bcc(['whary11@gmail.com', 'pablomart81@gmail.com']);
                });
                return 'Se envío correo electrónico informando a la empresa que está llegando a la caducidad de la suscripción., han pasado '.$dias.' días.';
              }else if($dias == 2){
                Mail::send($ruta, [
                  'usuario' => $usuario,
                  'dias' => $dias,
                ], function($msj)
                {
                  $msj->subject('Recordatorio Ménus Fácil');
                  $msj->to($this->email);
                  $msj->bcc(['whary11@gmail.com', 'pablomart81@gmail.com']);
                });
                return 'Se envío correo electrónico informando a la empresa que está llegando a la caducidad de la suscripción., han pasado '.$dias.' días.';
              }else if($dias == 1){
                Mail::send($ruta, [
                  'usuario' => $usuario,
                  'dias' => $dias,
                ], function($msj)
                {
                  $msj->subject('Recordatorio Ménus Fácil');
                  $msj->to($this->email);
                  $msj->bcc(['whary11@gmail.com', 'pablomart81@gmail.com']);
                });
                return 'Se envío correo electrónico informando a la empresa que está llegando a la caducidad de la suscripción., han pasado '.$dias.' días.';
              }else if($dias == 0){
                User::where('id', $usuario->id)->update([
                  'bloqueado' => 'SI',
                  'dias' => 0,
                ]);
              }
        }
      }
        // FIn de sentencias para el bloqueo de los usuarios al momento de la suscripción, sólo pasar estas instrucciones en donde se quieren ejecutar y tomar las acciones indicadas en los echos

    }else{
      return redirect('/dashboard');
    }
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

  public function diferenciaDias($inicio, $fin)
  {
    $inicio = date_format(date_create($inicio), 'Y-m-d');
    $fin = date_format(date_create($fin), 'Y-m-d');
    $date1 = new DateTime($inicio);
    $date2 = new DateTime( $fin);
    $diff = $date1->diff($date2);
    return $diff->days;
  }
}
