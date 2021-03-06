@if (Auth::user()->confirmado == 'SI')
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Admin || Menús Fácil</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="/admin/css/app.min.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link rel="icon" href="/admin/img/favicon.png" sizes="32x32">
      <style media="screen">
         body {
         display: flex;
         min-height: 100vh;
         flex-direction: column;
         }
         main {
         flex: 1 0 auto;
         }
         .img-pago{
         width: 280px;
         margin: 0 auto;
         }
         ::-webkit-input-placeholder {
         color: black;
         } 
         :-moz-placeholder {
         color: black;
         } 
         ::-moz-placeholder {
         color: black;
         } 
         :-ms-input-placeholder {
         color: black;
         }
         @media screen and (min-width:320px) {
         .img-pago{
         /* width: 300px; */
         }
         }
      </style>
   </head>
   <body>
      @if (Auth::user()->bloqueado == 'NO')
          <div id="dash" v-cloak> 
         @else
          <div id="dash">
         @endif
         <ul id="slide-out" class="sidenav grey lighten-2">
            @if (Auth::user()->bloqueado == 'NO')
            <li>
               <div class="user-view">
                  <a><img class="circle" width="190" src="{{Auth::user()->perfil}}"></a>
                  <a href="{{ url('cliente')."/".Auth::user()->url}}" target="_blank"><span class="gray-text name">{{Auth::user()->name}}</span></a>
                  <a href="#"><span class="gray-text email">{{ Auth::user()->email }}</span></a>
               </div>
            </li>
            @endif
            {{-- @if (Auth::user()->estado_empresa == 'PAGA') --}}
               <li><a href="{{url('/personaliza')}}">Ver perfil<i class="fas fa-users-cog"></i></a></li>
            {{-- @endif --}}
            <li>
               <div class="divider"></div>
            </li>
            <li><a href="{{ url('admin/facturacion') }}">Actualizar Cuenta<i class="fas fa-user-plus"></i></i></a></li>
            @if (Auth::user()->id_admin === null)
            <li>
               <div class="divider"></div>
            </li>
            <li><a href="{{ url('/admin/crear-sucursal') }}">Crear Sucursal<i class="fas fa-building"></i></a></li>
            <li>
               <div class="divider"></div>
            </li>
            @endif
            <li><a class="sidenav-close" href="#!">Cerrar<i class="fas fa-backspace"></i></a></li>
            <li>
               <div class="divider"></div>
            </li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="red-text accent-4">Cerrar Sesión<i class="fas fa-sign-out-alt"></i></a></li>
         </ul>
         <div class="navbar-fixed">
            <nav>
               <div class="nav-wrapper" style="background-color:{{Auth::user()->color1}}">
                  <div href="#" data-target="slide-out" style="cursor: pointer;" class="sidenav-trigger" id="menuLateral"><i class="material-icons large">menu</i></div>
                  <a class="brand-logo center">
                  <img src="{{Auth::user()->cabecera}}" alt="Menus Facil Logo" width="100px" class="imagen-logo">
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
         @if (Auth::user()->bloqueado == 'SI')
         @include('admin.includes.pago')
         @else
         @yield('contenido')
         <!-- Botones flotantes con opciones -->
         <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
            <a class="btn-floating btn-large">
            <i class="material-icons" style="background-color:{{Auth::user()->color2}};">add</i>
            </a>
            <ul>
               <li><a href="mailto:info@menusfacil.com" style="background-color:{{Auth::user()->color2}};" target="_blank"class="btn-floating tooltipped" data-position="left" data-tooltip="Soporte"><i class="fas fa-life-ring"></i></a></li>
               <li><a href="/documentacion" style="background-color:{{Auth::user()->color1}};" target="_blank"class="btn-floating tooltipped" data-position="left" data-tooltip="Documentación"><i class="fas fa-book"></i></a></li>
               <li><a href="{{url('/historico/menus/'.Auth::user()->url)}}" target="_blank"class="btn-floating green tooltipped" data-position="left" data-tooltip="Historico menús"><i class="material-icons">content_paste</i></a></li>
            </ul>
         </div>
      </div>
      <footer class="page-footer" style="background-color:{{Auth::user()->color1}}">
         <div class="footer-copyright">
            <div class="container">
               <h6 class="center-align">Menús Fácil - Manager de Pedidos y Menús ©2018 Todos los derechos reservados</h6>
            </div>
         </div>
      </footer>
      @endif
      @if (Auth::user()->bloqueado == 'NO')
      <script src="https://www.gstatic.com/firebasejs/5.0/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.0/firebase-database.js"></script>
      <script type="text/javascript" src="/admin/js/config.js"></script>
      <script type="text/javascript">
         let firebase = "empresa/<?php  echo Auth::user()->url ?>";
         let ref = db.ref(firebase);
      </script>
      @endif
      @yield('script')
   </body>
</html>
@else
<title>Confirmar Cuenta || Menús Fácil</title>
<link href="/admin/css/app.css" type="text/css" rel="stylesheet" media="screen,projection">
@include('admin.includes.activar')
@endif