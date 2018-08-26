<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagosController extends Controller
{
    public function exitosa(){

      $fecha = date("Y-m-d H:i:s");
      User::where('id', \Auth::id())->update([
        'bloqueado' => 'NO',
        'created_at' => $fecha,
        'dias' => 0,
      ]);
      // dd($request);
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
