<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partnert;
use Illuminate\Support\Facades\Validator;

class PartnertController extends Controller
{
  // Método para la vista del registro de los Partnerts
  public function indexpartnerts()
  {
    return view('partnerts.registro');
  }

  // Método para guardar los Partnerts

  public function create(Request $request){
      $partnert = Partnert::create([
        'nombre' => $request->input('nombre'),
        'correo' => $request->input('correo'),
        'telefono' => $request->input('telefono'),
      ]);
    return $partnert;
  }

}
