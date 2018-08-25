<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagosController extends Controller
{
    public function exitosa(Request $request){
      User::where('id', \Auth::id())->update([
        'bloqueado' => 'NO',
        'created_at' => date("Y-m-d H:i:s"),
        'dias' => 0,
      ]);
      dd($request);
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
