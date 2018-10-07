<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Mail;


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
    public $email;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }


    public function sucursal(){
        if (Auth::user()->id_admin != null) {
            return abort(404);
        }
        return view('auth.sucursales');
    }
    public function registro(Request $req){
        if (Auth::user()->id_admin != null) {
            return abort(404);
        }
        $usuarios = User::all()->where('url', $req->input('url'));
        if (count(User::all()->where('url', $req->input('url'))) > 0) {
            // Retornar error porque ya hay un usuario registrado con esta url
            return [
                'error' => true,
                'msg' => 'Ya hay empresa registrada con este nombre.',
                'campo' => 'url'
            ];
        # code...
        }else if(count(User::all()->where('email', $req->input('email'))) > 0){
            // Retornar error porque ya hay un usuario registrado con este email
            return [
                'error' => true,
                'msg' => 'Ya hay empresa registrada con este correo.',
                'campo' => 'email'
            ];
        }else{
            $this->email = $req->input('email');
            $user = User::create([
            'name' => $req->input('nombre'),
            'email' => $req->input('email'),
            'password' => Hash::make($req->input('clave')),
            'url' => $req->input('url'),
            'color1' => $req->input('color1'),
            'color2' => $req->input('color2'),
            'color3' => $req->input('color3'),
            'dias' => 14,
            'partnert_id' => Auth::user()->partnert_id,
            'id_admin' => Auth::id(),
          ]);
            Mail::send('correos/alregistrarse', ['user' => $user], function($msj)
            {
            $msj->subject('Por favor confirma tu suscripción a Menús Fácil.');
            $msj->to($this->email);
            $msj->bcc(['app.menusfacil@gmail.com']);
            });
            return [
                'error' => false,
                'msg' => 'Se ha creado la sucursal.'
                ];
            }
    }

    public function facturacion(){
        $ApiKey = 'w3Q56suC9RD1sM8WEh5wUf75ri';
        $merchanId = 644473;
        $accoundId = 646874;
        $descripcion = 'Compras para MenusFacil.';
        $valor1 = 87000;
        $valor2 = 169000;
        $valor3 = 420000;
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
