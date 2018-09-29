<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function facturacion(){
        $ApiKey = 'w3Q56suC9RD1sM8WEh5wUf75ri';
        $merchanId = 644473;
        $accoundId = 646874;
        $descripcion = 'Compras para MenusFacil.';
        $valor1 = 136000;
        $valor2 = 287000;
        $valor3 = 559000;
        $moneda = 'COP';
        $referencia1 = 'PAGO'.time(). rand(100,1000);
        $referencia2 = 'PAGO'.time(). rand(100,1000);
        $referencia3 = 'PAGO'.time(). rand(100,1000);
        $signature1 = md5($ApiKey.'~'.$merchanId.'~'.$referencia1.'~'.$valor1.'~'.$moneda);
        $signature2 = md5($ApiKey.'~'.$merchanId.'~'.$referencia2.'~'.$valor2.'~'.$moneda);
        $signature3 = md5($ApiKey.'~'.$merchanId.'~'.$referencia3.'~'.$valor3.'~'.$moneda);
      return view('admin.facturacion', [
          'merchanId' => $merchanId, 
          'accoundId' => $accoundId,
          'descripcion' => 'Actualización de plan MenusFacil.',
          'PLAN1' => [
            'moneda'     => $moneda,
            'valor'      => $valor1,
            'referencia' => $referencia1,
            'signature' => $signature1
          ],
          'PLAN2' => [
            'moneda'     => $moneda,
            'valor'      => $valor2,
            'referencia' => $referencia2,
            'signature' => $signature2
          ],
          'PLAN3' => [
            'moneda'     => $moneda,
            'valor'      => $valor3,
            'referencia' => $referencia3,
            'signature' => $signature3
          ],

          ]);
    }
}
