<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Menu;
use App\User;
class InicioController extends Controller
{
   public function index($url){
   		$usuario = User::all()->where('url', $url);
	   	if(count($usuario)){
        // Validar si el usuaro está bloqueado.
        if($usuario[0]->bloqueado == 'SI'){
          return view('/');
        }else{
          $menus;
          foreach ($usuario as  $value) {
            $menus = User::find($value->id)->menus;
          }
          return view('usuario.index', [
            'empresa' => $usuario,
            'menus' => $menus,
          ]);

        }
	    }else{
	    	dd('Enviar una vista de publicidad si la empresa no existe..');
	    }
	}
// pruebas

    public function diferenciaDias($inicio, $fin)
    {
        $inicio = strtotime($inicio);
        $fin = strtotime($fin);
        $dif = $fin - $inicio;
        $diasFalt = (( ( $dif / 60 ) / 60 ) / 24);
        return ceil($diasFalt);
    }
// $inicio = "2018/08/01";
// $fin = "2018/09/01";
// echo diferenciaDias($inicio, $fin);
// }
  public function doc(){
    return view('doc.index');
  }

  public function masvendido (){


// Inicio de sentencias para el bloqueo de los usuarios al momento de la suscripción.
    $user_id = \Auth::id();
    $usuario = \App\User::where('id', $user_id)->get();
    $inicio = $usuario[0]->created_at;
    $fin = '2018/10/28';
    #date("Y/m/d");
    $dias = $this->diferenciaDias($inicio, $fin);
    if($dias > 0){
      if($dias == 13){
       if($usuario[0]->estado_empresa == "GRATIS"){
         echo 'Enviar correo electrónico informando a la empresa que el día siguiente se termina la suscripción de prueba., han pasado '.$dias.' días.';
       }else{
         echo 'Almacenar en la base de datos el número de días, es un usuario que ya está pagando., han pasado '.$dias.' días.';
       }
      }else if($dias > 13 and $usuario[0]->estado_empresa == "GRATIS"){
        if($usuario[0]->bloqueado == 'NO'){
          echo 'Bloquear usuario, cambiar el valor de la columna bloqueado a "SI", han pasado '.$dias.' días.';
        }
      }else if($dias == 29){
       echo 'Enviar correo electrónico informando a la empresa que el día siguiente se termina la suscripción de pago., han pasado '.$dias.' días.';
      }else{
       echo 'Almacenar en la base de datos el número de días, han pasado '.$dias. ' días';
      }
    }
  // FIn de sentencias para el bloqueo de los usuarios al momento de la suscripción, sólo pasar estas instrucciones en donde se quieren ejecutar y tomar las acciones indicadas en los echos

    //
    //
    // $mvendidos = DB::select("SELECT menu_pedido, COUNT(menu_pedido) cantidad
    // FROM pedidos WHERE (user_id= $user_id)
    // GROUP BY menu_pedido
    // ORDER BY cantidad
    // DESC LIMIT 1");
    // $idmvendidos = $mvendidos[0]->menu_pedido;
    // $masvendido = DB::select("SELECT nombre FROM menus WHERE id=$idmvendidos");
    //
    //
    // echo('El ménu más vendido es '.$masvendido[0]->nombre.' con '.$mvendidos[0]->cantidad." ventas.");
    dd(DB::table('users')->get());
    // dd($mvendidos[0]->maximo);



  }



}
