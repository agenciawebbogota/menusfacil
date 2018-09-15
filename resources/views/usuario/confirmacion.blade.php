<!DOCTYPE html>
<html class="body-conf" lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cuenta Confirmada || Menús Fácil</title>
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
              <h3>Bienvenid@ a Menús Fácil {{$user->id}}</h3>
              <h4>Tu suscripción ha sido confirmada<br>En solo unos segundos recibirás en tu correo electrónico todos los detalles de tu suscripción</h4>
            </div>
            <div class="follow-fb">
              <p>Síguenos en Facebook<br/>Encontrarás videos tutoriales, documentación y toda la información sobre como usar la mejor aplicación de gestión de menús y pedidos, Menús Fácil</p>
            </div>
        </div>
    </div>
</body>
</html>
