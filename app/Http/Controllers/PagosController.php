<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;

class PagosController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function confirmacion(){
      $fecha = date("Y-m-d H:i:s");
      // Restringir la entrada a este controlador estrictamente si viene de la pasarela de pago
      $user = User::where('id', '=', \Auth::id())->first();
      $dias = $user->dias + 30;
      User::where('id', \Auth::id())->update([
        'bloqueado' => 'NO',
        'created_at' => $fecha,
        'estado_empresa' => 'PAGA',
        'dias' => $dias,
      ]);

      Mail::send('correos/pagorecibido', ['mensaje' => 'exito'], function($msj)
      {
        $msj->subject('Prueba de paos con PAYU');
        $msj->to(['whary11@gmail.com']);
      });


    }



    // public function fallo(){
    //   return view('suscripcion.fallo');
    // }
    // public function pendiente(){
    //   return view('suscripcion.pendiente');
    // }
    public function respuesta(){
      dd($_REQUEST, 'Facturar');
    }


}
