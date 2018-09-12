<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partnert;
use Illuminate\Support\Facades\Validator;
use Mail;

class PartnertController extends Controller
{
  // Método para la vista del registro de los Partnerts
  public $email;
  public function indexpartnerts()
  {
    return view('partnerts.registro');
  }

  // Método para guardar los Partnerts

  public function create(Request $request){
      $partnert = Partnert::create([
        'nombre' => $request->input('nombre'),
        'correo' => $request->input('correo'),
        // 'telefono' => $request->input('telefono'),
      ]);
      $this->email = $request->input('correo');
      Mail::send('correos/partnert/registro', [
        'partnert' => $partnert
      ], function($msj)
      {
        $msj->subject('Ya eres Partnert');
        $msj->to($this->email);
        $msj->bcc(['app.menusfacil@gmail.com']);
      });
    return $partnert;
  }

  public function get(){
    return Partnert::all();
  }

}
