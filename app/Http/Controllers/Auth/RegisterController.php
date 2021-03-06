<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'url'      => 'required|string|max:255|unique:users'
        ]);
    }
    public $email;

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $this->email = $data['email'];
      $partnert;
      if($data['partnert_id'] == ''){
        $partnert = 1;
      }else{
        $partnert = $data['partnert_id'];
      }
        $user = User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          'url' => $data['url'],
          'color1' => $data['color1'],
          'color2' => $data['color2'],
          'color3' => $data['color3'],
          'dias' => 14,
          'partnert_id' => $partnert,
        ]);
        Mail::send('correos/alregistrarse', ['user' => $user], function($msj)
        {
          $msj->subject('Por favor confirma tu suscripción a Menús Fácil.');
          $msj->to($this->email);
          $msj->bcc(['app.menusfacil@gmail.com']);
        });
        return $user;
    }

}
