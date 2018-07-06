<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Sistema de pedidos</title>
    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- Para iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- Para Windows Phone -->
    <!-- CORE CSS-->
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen -->
    <link href="css/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
  <div id="dash">
      <!-- PRINCIPAL -->
    {{-- <div id="main"> --}}
        <!-- INCIO WRAPPER -->
        {{-- <div class="wrapper"> --}}

            <!-- INICIO MENU IZQUIERDA-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <a class="btn-flat waves-effect waves-light white-text profile-btn">{{ Auth::user()->name }}</a>
                            <p class="user-roal">Administrador</p>
                        </div>
                    </li>
                    <div class="col col s8 m8 l8">
                        <ul class="ajustes-menu">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a>
                            </li>
                            <li><a href="#"><i class="mdi-action-settings"></i> Ajustes</a>
                            </li>
                            <li><a href="#"><i class="mdi-communication-live-help"></i> Ayuda</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi-hardware-keyboard-tab"></i> Salir</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                            </li>
                        </ul>
                    </div>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light yellow"><i class="mdi-navigation-menu" style="color:red"></i></a>
            </aside>

    <!-- Preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- Fin Preloader -->

    <!-- INICIO HEADER -->
    <header id="header" class="page-topbar">
        <!-- nav barra superior-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo center darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"></i>
                        </a>
                        </li>

                    </ul>

                    <!-- area de notificaciones -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>NOTIFICATIONES</h5>
                      </li>
                      <li class="divider"></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- fin nav barra superior-->
    </header>
    <!-- FIN HEADER -->
    @yield('contenido')









  </div>
    <!-- INCIO FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2018 <a class="grey-text text-lighten-4" href="http://www.agenciawebbogota.com/" target="_blank">Agencia Web Bogotá</a> Todos los derechos reservados.
                <span class="right"> Desarrollado por <a class="grey-text text-lighten-4" href="http://www.agenciawebbogota.com/" target="_blank">Agencia Web Bogotá</a></span>
            </div>
        </div>
    </footer>
    <!-- FIN FOOTER -->
    <!-- ========Scripts============================ -->
    <!-- Libreria jQuery -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--plugins.js-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- Vue.js -->
    <script type="text/javascript" src="js/materialize-paginacion.js"></script>
    <script type="text/javascript">

    </script>
    <script type="text/javascript" src="js/axios.min.js"></script>
    <script type="text/javascript" src="js/vue.js"></script>
    <script type="text/javascript" src="js/indexvue.js"></script>
</body>
</html>
