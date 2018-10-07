<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Renovación Existosa | Menús Fácil</title>
  <link rel="stylesheet" href="/inicio/css/app.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" href="/admin/img/favicon.png" sizes="32x32">
</head>

<style media="screen">
  body { background-color: #fff; }
  .rnv-title{ text-align: center;padding-top:60px;}
  @media screen and (max-width:720px){ .rnv-title{ font-size: 18px; }}
  .cont-rnv{ font-size:22px;text-align:center;padding:20px; }
  @media screen and (max-width:720px){ .cont-rnv{ font-size: 15px; }}
</style>

<body>
    <nav>
        <a class="brand-logo center">
          <img src="/admin/img/logo-menusfacil.svg" alt="Menus Facil Logo" width="100px" class="imagen-logo">
        </a>
    </nav>
    @if ($resp['transactionState'] == 4)
      <h2 class="rnv-title">RENOVACIÓN DE SUSCRIPCIÓN EXITOSA</h2>
      <h4 class="cont-rnv">Excelente, has revonado tu suscripción a Menús Fácil</h4>
    </div>
    <div class="row">
      <div class="col m4 offset-m4 s6 offset-s3 l5 offset-l5">
        <a href="/login" class="btn btn-prueba" style="background-color:#e88a10 !important"> <span>Ingresa a tu Dashboard</span></a>
      </div>
    </div>
    <div class="row">
      <p style="text-align:center;margin-top:30px;font-size:12px;color:#7e7e7e">Continúa disfrutando de Menús Fácil</p>
    </div>

  <div class="container">
    <div class="col s8">

      {{-- Validar la firma --}}

      @php

        $ApiKey = "w3Q56suC9RD1sM8WEh5wUf75ri";
        $merchant_id = $_REQUEST['merchantId'];
        $referenceCode = $_REQUEST['referenceCode'];
        $TX_VALUE = $_REQUEST['TX_VALUE'];
        $New_value = number_format($TX_VALUE, 1, '.', '');
        $transactionState = $_REQUEST['transactionState'];
        $currency = $_REQUEST['currency'];
        $firma_cadena = "$ApiKey~$merchant_id~$referenceCode~$New_value~$currency";
        $firmacreada = md5($firma_cadena);
        // $transactionState = $_REQUEST['transactionState'];
        $firma_cadena;
        // $firmacreada = md5($ApiKey.'~'.$merchant_id.'~'.$referenceCode.'~'.$New_value.'~'.$currency);
        $firmacomercio = $resp['signature'];
      @endphp

{{-- {{$New_value}}
<br>
      {{strtoupper($firmacreada)}}
      <br>
      {{strtoupper($firmacomercio)}} --}}

    <h4 class="center-align">Resumen de la transacción</h4>
    <table class="striped">
        <tbody>
          <tr>
            <td>Estado de la ransacción REF({{$resp['referenceCode']}})</td>
            @if ($resp['transactionState'] == 4)
              <td>APROBADA</td>
            @elseif ($resp['transactionState'] == 6)
              <td>RECHAZADA</td>
            @elseif ($resp['transactionState'] == 104)
              <td>ERROR</td>
            @elseif($resp['transactionState'] == 104)

            @endif
          </tr>
          <tr>
            <td>Correo</td>
            <td>{{$resp['buyerEmail']}}</td>
          </tr>
          <tr>
            <td>Medio de pagado</td>
            <td>{{$resp['lapPaymentMethod']}} - {{$resp['lapPaymentMethodType']}}</td>
          </tr>
          <tr>
            <td>Moneda</td>
            <td>{{$resp['currency']}}</td>
          </tr>


          <tr>
            <td>Total pagado</td>
            <td>{{$resp['TX_VALUE']}}</td>
          </tr>
      </table>

    </div>

  @else
    <h2 class="rnv-title">UPPS!</h2>
    <h4 class="cont-rnv">Parece que aún no ha terminado el proceso de pago para renovar la suscripción a Menús Fácil.</h4>
  </div>
  {{-- <div class="row">
  <div class="col m4 offset-m4 s6 offset-s3 l5 offset-l5">
  <a href="/login" class="btn btn-prueba" style="background-color:#e88a10 !important"> <span>Ingresa a tu Dashboard</span></a>
</div>
</div>
<div class="row">
<p style="text-align:center;margin-top:30px;font-size:12px;color:#7e7e7e">Continúa disfrutando de Menús Fácil</p>
</div> --}}
@endif



    {{-- <p>Id del mercado: {{$resp['merchantId']}}</p>
    <p>Estado de la transacción: {{$resp['transactionState']}}</p> --}}
</body>
</html>
