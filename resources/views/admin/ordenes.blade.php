
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ordenes del día || Menús Fácil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link href="{{url('/ordenes/css/app.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="/assets/css/animate.min.css" rel="stylesheet">
  <link href="/style.css" rel="stylesheet">
  <link rel="icon" href="/admin/img/favicon.png" sizes="32x32">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }
    main {
      flex: 1 0 auto;
    }
    [v-cloak] {
      display: none;
    }
  </style>
</head>
<body>
  <main id="ordenes" v-cloak>
    <div class="bgbar">
      <nav>
        <a class="brand-logo center">
          <img src="/admin/img/logo-menusfacil.svg" alt="Menus Facil Logo" width="100px" class="imagen-logo">
        </a>
      </nav>
    </div>
    <div class="container">
      <table class="centered striped highlight responsive-table">
        <section class="center-align">
          <h1>Ordenes del día  <a href="{{url('/descarga/pedidos')}}" target="_blank" class="btn tooltipped" data-position="button" data-tooltip="Ver o imprimir pedidos" style="background-color:{{Auth::user()->color3}} !important;"><i class="material-icons">file_download</i></a></h1>
          <span>En tiempo real   <i class="material-icons tiny">access_time</i></span>
        </section>
        <thead v-if="pedidos != ''">
              <tr>
                <th>Cliente</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Menú</th>
                <th>Oservaciones</th>
                <th>Tiempo</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(pedido, index) in pedidos">
                <td>@{{pedido.nombre}}</td>
                <td>@{{pedido.direccion}}</td>
                <td>@{{pedido.telefono}}</td>
                <td>@{{pedido.correo}}</td>
                <td>@{{pedido.nombre_pedido}}</td>
                <td>@{{pedido.observaciones}}</td>
                <td><i class="material-icons tiny">access_time</i> @{{momentjs(pedido.created_at)}}</td>
              </tr>
            </tbody>
        </table>
    </main>
    <!-- Footer -->
    <footer class="page-footer" style="background-color:{{Auth::user()->color1}}">
        <div class="footer-copyright">
            <div class="container">
              <h6 class="center-align white-text">Menús Fácil - Manager de Pedidos y Menús ©2018 Todos los derechos reservados</h6>
            </div>
        </div>
    </footer>
    <!-- JavaScript -->
    <script src="https://www.gstatic.com/firebasejs/5.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0/firebase-database.js"></script>
    <script type="text/javascript" src="/admin/js/config.js"></script>
    <script type="text/javascript">
      let firebase = "empresa/<?php  echo Auth::user()->url ?>";
      let ref = db.ref(firebase);
    </script>
    <script src="/ordenes/js/app.min.js"></script>
</body>
</html>
