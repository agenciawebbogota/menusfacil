<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Admin || Menús Fácil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="/admin/css/app.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" href="admin/img/favicon.png" sizes="32x32">
</head>
<body>
  <div id="dash" v-cloak>
    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view">
          <a><img class="circle" width="190" src="{{url('/img/logo2.png')}}"></a>
          <a href="{{ url('empresa')."/".Auth::user()->url}}" target="_blank"><span class="gray-text name">VISTA PÚBLICA</span></a>
          <a href="#"><span class="gray-text email" style="text-transform:uppercase;">{{ Auth::user()->email }}</span></a>
        </div>
      </li>
      <li><a href="#!">Ver perfil<i class="material-icons">face</i></a></li>
      <li><div class="divider"></div></li>
        <li><a class="sidenav-close" href="#!">Cerrar<i class="material-icons">keyboard_backspace</i></a></li>
      <li><div class="divider"></div></li>
      <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesión<i class="material-icons">power_settings_new</i></a></li>
    </ul>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper" style="background-color:{{Auth::user()->color1}}">
          <div href="#" data-target="slide-out" style="cursor: pointer;" class="sidenav-trigger" id="menuLateral"><i class="material-icons large">menu</i></div>
            <a class="brand-logo center">
              <img src="admin/img/logo-menusfacil.svg" alt="Menus Facil Logo" width="100px" class="imagen-logo">
            </a>
            <ul class="right hide-on-med-and-down">
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
  @yield('contenido')
  </div>
    <!-- Botones flotantes con opciones -->
  <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
    <a class="btn-floating btn-large">
      <i class="material-icons" style="background-color:{{Auth::user()->color2}};">add</i>
    </a>
    <ul>
      {{-- <li><a href="#" class="btn-floating red darken-1 tooltipped" data-position="left" data-tooltip="Descargar ordenes"><i class="material-icons">file_download</i></a></li>
      <li><a href="#" class="btn-floating yellow darken-1 tooltipped" data-position="left" data-tooltip="Descargar menús"><i class="material-icons">file_download</i></a></li> --}}
      <li><a href="/historico/menus/{{Auth::user()->url}}" target="_blank"class="btn-floating green tooltipped" data-position="left" data-tooltip="Historico menús"><i class="material-icons">content_paste</i></a></li>
    </ul>
  </div>
  <footer class="page-footer" style="background-color:{{Auth::user()->color1}}">
      <div class="footer-copyright">
          <div class="container">
            <span class="left"> Desarrollado por <a class="grey-text text-lighten-4" href="http://www.agenciawebbogota.com/" target="_blank">Agencia Web Bogotá</a></span>
            <span class="right">Todos los derechos reservados ®</span>
          </div>
      </div>
  </footer>
  <script src="https://www.gstatic.com/firebasejs/5.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.0/firebase-database.js"></script>
  <script type="text/javascript" src="admin/js/config.js"></script>
  <script type="text/javascript">
    let firebase = "empresa/<?php  echo Auth::user()->url ?>";
    let ref = db.ref(firebase);
  </script>
  <script type="text/javascript" src="/admin/js/app.js"></script>
</body>
</html>
