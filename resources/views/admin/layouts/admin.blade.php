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
  <style media="screen">
    .img-pago{
        width: 280px;
        margin: 0 auto;
    }
  @media screen and (min-width:320px) {
    .img-pago{
        /* width: 300px; */
    }

  }
  </style>
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
    @if (Auth::user()->bloqueado == 'SI')
      {{-- Vista para pagar. --}}
      <p style="text-align:center">Renueva tu suscripción</p>

      <div class="row">
        <div class="img-pago">
          <!-- Boton PayU -->
          <form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
            <input type="image" border="0" class="{{--col m4 offset-m4 s4 offset-s1 l4 offset-l4 --}}" alt="" src="http://agenciawebbogota.com/social/boton-pagar.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
            <input name="buttonId" type="hidden" value="iTBmFbx+1Fyy7Pe4hIPsFPE3bIVkltlKm5huATupPoVNFmQFfNDpug=="/>
            <input name="merchantId" type="hidden" value="644473"/>
            <input name="accountId" type="hidden" value="646874"/>
            <input name="description" type="hidden" value="Suscripción mensual MenúsFácil"/>
            <input name="referenceCode" type="hidden" value="01"/>
            <input name="amount" type="hidden" value="87000"/>
            <input name="tax" type="hidden" value="0"/>
            <input name="taxReturnBase" type="hidden" value="0"/>
            <input name="currency" type="hidden" value="COP"/>
            <input name="lng" type="hidden" value="es"/>
            <input name="test" value="1" type="hidden">
            <input name="approvedResponseUrl" type="hidden" value="http://menusfacil.com/confirmacion/suscripcion-exitosa"/>
            <input name="declinedResponseUrl" type="hidden" value="http://menusfacil.com/confirmacion/fallo"/>
            <input name="pendingResponseUrl" type="hidden" value="http://menusfacil.com/confirmacion/suscripcion-pendiente"/>
            <input name="displayShippingInformation" type="hidden" value="NO"/>
            <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
            <input name="buttonType" value="SIMPLE" type="hidden"/>
            <input name="signature" value="1c1c179edf191058f5a166ef2230127d6b8eb258f822977af9c5782963bbc122" type="hidden"/>
          </form>
          <!-- Fin Boton -->

        </div>

      </div>
      <p style="text-align:center">No cierres tu sesión hasta el pago sea completado.</p>

    @else
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
</div>
  <footer class="page-footer" style="background-color:{{Auth::user()->color1}}">
      <div class="footer-copyright">
          <div class="container">
            <span class="left"> Desarrollado por <a class="grey-text text-lighten-4" href="https://agenciawebbogota.com/" target="_blank">Agencia Web Bogotá</a></span>
            <span class="right">Todos los derechos reservados</span>
          </div>
      </div>
  </footer>
@endif
  @if (Auth::user()->bloqueado == 'SI')
    <script src="https://www.gstatic.com/firebasejs/5.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0/firebase-database.js"></script>
    <script type="text/javascript" src="admin/js/config.js"></script>
    <script type="text/javascript">
    let firebase = "empresa/<?php  echo Auth::user()->url ?>";
    let ref = db.ref(firebase);
    </script>
    <script type="text/javascript" src="/admin/js/app.js"></script>

  @endif

</body>
</html>
