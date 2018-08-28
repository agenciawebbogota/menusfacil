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
    public function exitosa(Request $request){
      dd($request);
      // dd($_REQUEST);
      $fecha = date("Y-m-d H:i:s");
      // Restringir la entrada a este controlador estrictamente si viene de la pasarela de pago
      User::where('id', \Auth::id())->update([
        'bloqueado' => 'NO',
        'created_at' => $fecha,
        'dias' => 0,
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
