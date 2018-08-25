<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagosController extends Controller
{
    public function exitosa(){
      return 'Felicidades se ha realizado el pago con exito';
    }

    public function fallo(){
      return 'Tu pago falló.';
    }
    public function pendiente(){
      return 'Tu pago está pendiente.';
    }


}
