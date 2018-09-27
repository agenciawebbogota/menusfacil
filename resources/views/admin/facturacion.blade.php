
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Partnert || Menús Fácil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="csrf-token" content="IKjGR54bAHYIfZadImuhOCJF7QhLZSqXWqQGKd21">
  <link href="http://127.0.0.1:8000/partnerts/css/app.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{url('partnerts/css/custom.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{url('admin/css/facturacion.css')}}">
  <link rel="icon" href="{{url('admin/img/favicon.png')}}" sizes="32x32">
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
          <img src="{{url('admin/img/logo-menusfacil.svg')}}" alt="Menus Facil Logo" width="100px" class="imagen-logo">
        </a>
      </nav>
    </div>




    <!-- Botones flotantes con opciones -->

  <footer class="page-footer" style="background-color:#2a2730">
      <div class="footer-copyright">
          <div class="container">
            <span class="left"> Desarrollado por <a class="grey-text text-lighten-4" href="https://agenciawebbogota.com/" target="_blank">Agencia Web Bogotá</a></span>
            <span class="right">Todos los derechos reservados</span>
          </div>
      </div>
      <script type="text/javascript" src="{{url('partnerts/js/app.min.js')}}">

      </script>
  </footer>
</body>
</html>
