<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pedidos nuevo diseño</title>
  <link href="css2/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body>
  <div id="dash">
    <div>
    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view">
        <a href="#imgusuario"><img class="circle" src="img/node.png"></a>
        <a href="#nombre"><span class="gray-text name">{{ Auth::user()->name }}</span></a>
        <a href="#correo"><span class="gray-text email">{{ Auth::user()->email }}</span></a>
      </div>
    </li>
    <li><a href="#!">Ver perfil<i class="material-icons">face</i></a></li>
    <li><div class="divider"></div></li>
      <li><a class="sidenav-close" href="#!">Cerrar menu<i class="material-icons">keyboard_backspace</i></a></li>
    <li><div class="divider"></div></li>
    </ul>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper">
          <div href="#" data-target="slide-out" style="cursor: pointer;" class="sidenav-trigger" id="menuLateral"><i class="material-icons">menu</i></div>
          <ul class="right hide-on-med-and-down">
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();                                                   document.getElementById('logout-form').submit();">
                  <i class="material-icons">power_settings_new</i>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  @yield('contenido', 'default')




  </div>
    <!-- Botones flotantes con opciones -->
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large green darken-1">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      {{-- <li><a class="btn-floating blue modal-trigger" href="#actualizarMenu"><i class="material-icons">add_circle</i></a></li> --}}
    </ul>
  </div>
  <p>
   
  </p>
  <footer class="page-footer">
    <div class="footer-copyright" >
        <div class="container">
        © 2018 EMPRESA, todos los derechos reservados.
        </div>
     </div>
  </footer>
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>
  <script type="text/javascript" src="js2/materialize.min.js"></script>
  <script type="text/javascript">

  </script>
  <script type="text/javascript" src="js/axios.min.js"></script>
  <script type="text/javascript" src="js/vue.js"></script>
  <script type="text/javascript" src="js/indexvue.js"></script>
</body>
</html>
