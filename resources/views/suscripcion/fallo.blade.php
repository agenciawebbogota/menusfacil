<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>¡Ups! Algo pasó</title>
  <link rel="stylesheet" href="/inicio/css/app.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" href="{{url('admin/img/favicon.png')}}" sizes="32x32">

</head>

<style media="screen">
  body { background-color: #fff; }
  .rnv-title{ text-align: center;padding-top:60px;}
  @media screen and (max-width:720px){ .rnv-title{ font-size: 18px; }}
  .cont-rnv{ font-size:22px;text-align:center;padding:20px; }
  @media screen and (max-width:720px){ .cont-rnv{ font-size: 15px; }}
</style>

<body>
    <nav style="background-color:#66181a !important">
        <a class="brand-logo center">
          <img src="/admin/img/logo-menusfacil.svg" alt="Menus Facil Logo" width="100px" class="imagen-logo">
        </a>
    </nav>
  <div class="row">
    <h2 class="rnv-title">¡UPS! ALGO PASÓ</h2>
    <h4 class="cont-rnv">Por algún motivo tu pago ha sido rechazado, por favor verifica tus datos e intenta nuevamente</h4>
  </div>
  <div class="row">
    <div class="col m4 offset-m4 s6 offset-s3 l5 offset-l5">
      <a href="/login" class="btn btn-prueba" style="background-color:#2aae0b !important"> <span>Intentar nuevamente</span></a>
    </div>
  </div>
  <div class="row">
    <p style="text-align:center;margin-top:30px;font-size:12px;color:#7e7e7e">Inicia sesión con tu usario y contraseña</p>
  </div>
</body>
</html>
