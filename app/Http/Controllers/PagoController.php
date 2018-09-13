<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoController extends Controller
{
  public function confirmacion(Request $request){
    if($request->state_pol == 4){
      $fecha = date("Y-m-d H:i:s");
      // Restringir la entrada a este controlador estrictamente si viene de la pasarela de pago
      $user = User::where('id', '=', $request->extra1)->first();
      $dias = $user->dias + 30;
      User::where('id', $request->extra1)->update([
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


  }

  public function respuesta(){

    // var_dump($_REQUEST['response_message_pol']);

    // dd($_REQUEST);
    //
    // $resp = [
    //   'merchantId' => $_REQUEST['merchantId'],
    //   'transactionState' => $_REQUEST['transactionState'],
    // ];

    // dd($resp->merchantId);


    return view('suscripcion.respuesta', ['resp' => $_REQUEST]);
  }
}
