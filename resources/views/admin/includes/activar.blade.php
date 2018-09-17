<!DOCTYPE html>
<html class="body-conf" lang="es">
<head>
  <meta charset="UTF-8">
  <title>Confirmar Cuenta || Menús Fácil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{url('partnerts/css/app.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{url('partnerts/css/confirmacion.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" href="{{url('admin/img/favicon.png')}}" sizes="32x32">

</head>
<body>
    <div class="navbar-fixed">
      <nav>
        <a class="brand-logo center">
          <img src="{{url('admin/img/logo-menusfacil.svg')}}" alt="Menus Facil Logo" width="100px" class="imagen-logo">
        </a>
      </nav>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="conf-susc-title">
              <h3>Gracias por registrarte en Menús Fácil</h3>
              <h4>Hemos enviado un mensaje a tu correo electrónico para completar tu suscripción<br>
                Por favor revisa tu bandeja de entrada</h4>
            </div>
          </div>
          <div class="warn-conf col s10 offset-s1">
            <p>Si no ves el mensaje de confirmación en tu bandeja de entrada, revisa tu carpeta de spam (correo no deseado).
            No debería estar allí, pero a veces ¡estas cosas pasan!</p>
          </div>
    </div>
</body>
</html>
