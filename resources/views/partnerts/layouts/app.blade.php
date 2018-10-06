<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Coviertete en Socio || Menús Fácil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="/partnerts/css/app.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="/partnerts/css/custom.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" href="/admin/img/favicon.png" sizes="32x32">
  <style media="screen">
    [v-cloak] {
      display: none;
    }
    .imagen-logo{
      width: 140px;
      /* text-align:  */
    }
  </style>
</head>
<body>
  <div id="partnerts" v-cloak>
    <div class="navbar-fixed">
      <nav>
        <a class="brand-logo center">
          <img src="/admin/img/logo-menusfacil.svg" alt="Menus Facil Logo" width="100px" class="imagen-logo">
        </a>
      </nav>
    </div>

  @yield('contenido')


    <!-- Botones flotantes con opciones -->
  {{-- <div class="fixed-action-btn" style="bottom: 50px; right: 19px;" id="historicomnus" data-intro='Ver más opciones.' data-step="2">
    <a class="btn-floating btn-large">
      <i class="material-icons" style="background-color:#66181a;">add</i>
    </a>
    <ul>
  </div>
</div> --}}
  <footer class="page-footer" style="background-color:#2a2730">
      <div class="footer-copyright">
          <div class="container">
            <span class="left"> Desarrollado por <a class="grey-text text-lighten-4" href="https://agenciawebbogota.com/" target="_blank">Agencia Web Bogotá</a></span>
            <span class="right">Todos los derechos reservados</span>
          </div>
      </div>
      <script type="text/javascript" src="/partnerts/js/app.min.js">

      </script>
  </footer>
</body>
</html>
