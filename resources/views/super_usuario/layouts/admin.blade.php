<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Manager || Menús Fácil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="/super_usuario/css/app.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs-rtl.min.css"> --}}
  <link rel="icon" href="admin/img/favicon.png" sizes="32x32">
  <style media="screen">
    [v-cloak] {
      display: none;
    }
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }
    main {
      flex: 1 0 auto;
    }
  </style>
</head>
<body>
  <div id="superadmin" v-cloak>
    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view">
          <a><img class="circle" width="190" src="{{url('/img/logo2.png')}}"></a>
          {{-- <a href="{{ url('empresa')."/".Auth::user()->url}}" target="_blank"><span class="gray-text name">VISTA PÚBLICA</span></a> --}}

          <a href="#"><span class="gray-text email" style="text-transform:uppercase;">{{ Auth::user()->email }}</span></a>
        </div>
      </li>
      <li><a href="#!">Ver perfil<i class="material-icons">face</i></a></li>
      <li><div class="divider"></div></li>
        <li><a class="sidenav-close" href="#!">Cerrar<i class="material-icons">keyboard_backspace</i></a></li>
      <li><div class="divider"></div></li>
      <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesión<i class="material-icons">power_settings_new</i></a></li>
      <li><div class="divider"></div></li>
      <li>
        <button class="btn waves-effect waves-light" @click="actualizarDias()">Actualizar días
          <i class="material-icons right">send</i>
        </button>
      </li>
    </ul>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper" style="background-color:{{Auth::user()->color1}}">
          <div href="#" data-target="slide-out" style="cursor: pointer;" class="sidenav-trigger menuLateral" id="menuLateral" ><i class="material-icons large" data-intro='Menú para ver opciones del usuario.' data-step="1">menu</i></div>
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
    <!-- Botones flotantes con opciones -->
  <div class="fixed-action-btn" style="bottom: 50px; right: 19px;" id="historicomnus" data-intro='Ver más opciones.' data-step="2">
    <a class="btn-floating btn-large">
      <i class="material-icons" style="background-color:{{Auth::user()->color2}};">add</i>
    </a>
    <ul>
      {{-- <li><a href="#" class="btn-floating red darken-1 tooltipped" data-position="left" data-tooltip="Descargar ordenes"><i class="material-icons">file_download</i></a></li>
      <li><a href="#" class="btn-floating yellow darken-1 tooltipped" data-position="left" data-tooltip="Descargar menús"><i class="material-icons">file_download</i></a></li> --}}

      <li><a href="/historico/menus/{{Auth::user()->url}}" target="_blank" class="btn-floating green tooltipped" data-position="left" data-tooltip="Historico menús"><i class="material-icons">content_paste</i></a></li>
      <li><a @click.prevent="vistaGuiada()" class="btn-floating green tooltipped" data-position="left" data-tooltip="Vista guiada"><i class="material-icons">content_paste</i></a></li>
    </ul>
  </div>
</div>
  <footer class="page-footer" style="background-color:{{Auth::user()->color1}}">
      <div class="footer-copyright">
          <div class="container">
            <span class="left"> Desarrollado por <a class="grey-text text-lighten-4" href="https://agenciawebbogota.com/" target="_blank">Agencia Web Bogotá</a></span>
            <span class="right">Todos los derechos reservados</span>
          </div>
      </div>
  </footer>
  <script type="text/javascript" src="/super_usuario/js/app.js"></script>

  </script>

</body>
</html>
