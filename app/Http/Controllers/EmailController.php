<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmailController extends Controller
{
    public function index()
    {
        // $data =array('email' => 'us@example.com');
        $user = User::all()->first();


        \Mail::send('correos.alregistrarse1', ['user'=>$user], function ($message) {
           
            $message->from('us@example.com', 'Laravel');
 
            $message->to('foo@example.com')->cc('bar@example.com');
        });
 
        print('Enviado');
    }
}
