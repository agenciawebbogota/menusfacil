<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function exitosa(){
      // dd($request);
      // dd($_REQUEST);
      // return $_REQUEST['transactionState'];
      $fecha = date("Y-m-d H:i:s");
      // Restringir la entrada a este controlador estrictamente si viene de la pasarela de pago
      $user = User::where('id', '=', \Auth::id())->first();
      $dias = $user->dias + 30;
      User::where('id', \Auth::id())->update([
        'bloqueado' => 'NO',
        'created_at' => $fecha,
        'estado_empresa' => 'PAGA'
        'dias' => $dias,
      ]);
      return view('suscripcion.exitosa');
    }
    public function fallo(){
      // return 'Tu pago falló.'
      return view('suscripcion.fallo');
    }
    public function pendiente(){
      return view('suscripcion.pendiente');
      // return 'Tu pago está pendiente.';
    }


}
