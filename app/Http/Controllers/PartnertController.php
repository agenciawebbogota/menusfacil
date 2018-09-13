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

      Partnert::where('id', $partnert->id)->update([
        'code_partnert' => 1000+$partnert->id,
      ]);
      $this->email = $request->input('correo');
      Mail::send('correos/partnert/registro', [
        'partnert' => Partnert::all()->where('id', $partnert->id)->first(),
      ], function($msj)
      {
        $msj->subject('Ya eres Partnert');
        $msj->to($this->email);
        $msj->bcc(['app.menusfacil@gmail.com']);
      });
  }

  public function get(){
    return Partnert::all();
  }

}
