<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>MenusFácil</title>
    <link rel="icon" href="admin/img/favicon.png" sizes="32x32">
    <!-- Para iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- Para Windows Phone -->
    <!-- CORE CSS-->
    <link href="admin/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen -->
    <link href="admin/css/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>

</head>

<body>
    <!-- INICIO HEADER -->
    <header id="header" class="page-topbar">
        <!-- nav barra superior-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo center darken-1"><img src="admin/img/menusfacil-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
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

  <!-- PRINCIPAL -->
    <!-- <div id="main"> -->
        <!-- INCIO WRAPPER -->
        <div class="wrapper" id="dash">

            <!-- INICIO MENU IZQUIERDA-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="admin/img/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn">Johcxvbxcvbn Doe</a>
                            <p class="user-roal">Aasdfgdministrador</p>
                        </div>
                    </li>
                    <!-- <div class="col col s8 m8 l8"> -->
                        <ul class="ajustes-menu col col s8 m8 l8">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a>
                            </li>
                            <li><a href="#"><i class="mdi-action-settings"></i> Ajustes</a>
                            </li>
                            <li><a href="#"><i class="mdi-communication-live-help"></i> Ayuda</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Salir</a>
                            </li>
                        </ul>
                    <!-- </div> -->
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light yellow"><i class="mdi-navigation-menu" style="color:red"></i></a>
            </aside>
            <!-- FIN MENU IZQUIERDA-->

            <!-- INCIO CONTENIDO -->
            <!-- <section id="content"> -->

                <!--contenedor-->
                <div class="container">

                  <!--chart dashboard start-->
                  <div>
                      <div class="row">
                          <div class="col s12 m12 l8">
                              <div class="card">
                                  <div class="card-move-up waves-effect waves-block waves-light">
                                      <div class="move-up cyan darken-1">
                                        <p></p>
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                        <a href="/descarga/menus" target="_blank" class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-editor-vertical-align-bottom"></i></a>
                                      </div>
                                  </div>
                                  <div class="card-content">
                                    <div style="overflow:scroll;height:350px">
                                  		@include('admin.includes.recursos.tabla')
                                    </div>
                                  </div>
                                  <!-- Formulario -->
                                  <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Crear Nuevo Menu <i class="mdi-navigation-close right"></i></span>


                                        <div class="row">
                                          <div class="col s12 m12 l12">
                                            {{-- <div class="row"> --}}
                                              
                                      			@include('admin.includes.formularios.agregarmenu')
                                            {{-- </div> --}}
                                          </div>
                                        </div>

                        
                                  </div>

                              </div>
                          </div>

                          <div class="col s12 m12 l4">
                              <div class="card teal" style="height:440px">
                                  <div class="card-move-up teal waves-block waves-light">
                                      <div class="move-up">
                                      	<!-- @include('admin.includes.recursos.solicitados') -->
                                      </div>
                                  </div>
                                  <div class="card-content teal">
                                    <a href="/descarga/pedidos" target="_blank" class="btn-floating btn-move-up waves-effect waves-light darken-2 center tooltipped" data-position="right" data-tooltip="Ver o imprimir pedidos"><i class="mdi-file-file-download"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--chart dashboard end-->


                  <!-- //////////////////////////////////////////////////////////////////////////// -->

                  <!--card stats start-->
                  <div id="card-stats">
                      <div class="row">
                          <div class="col s12 m6 l3">
                              <div class="card">
                                  <div class="card-content  green white-text">
                                      <p class="card-stats-title"><i class="mdi-social-group-add"></i> Menus creados</p>
                                      <h4 class="card-stats-number">@{{ total }}</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                      </p>
                                  </div>
                                  <div class="card-action  green darken-2">
                                      <div id="clients-bar" class="center-align"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col s12 m6 l3">
                              <div class="card">
                                  <div class="card-content pink lighten-1 white-text">
                                      <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i>Solicitados hoy</p>
                                      <h4 class="card-stats-number" v-model="pedidos">@{{pedidos.length}}</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">@{{ fecha }}</span>
                                      </p>
                                  </div>
                                  <div class="card-action  pink darken-2">
                                      <div id="invoice-line" class="center-align"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col s12 m6 l3">
                              <div class="card">
                                  <div class="card-content blue-grey white-text">
                                      <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                                      <h4 class="card-stats-number">$806.52</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                      </p>
                                  </div>
                                  <div class="card-action blue-grey darken-2">
                                      <div id="profit-tristate" class="center-align"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col s12 m6 l3">
                              <div class="card">
                                  <div class="card-content purple white-text">
                                      <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                                      <h4 class="card-stats-number">$8990.63</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                      </p>
                                  </div>
                                  <div class="card-action purple darken-2">
                                      <div id="sales-compositebar" class="center-align"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                      {{-- Modal de editar --}}
                            @include('admin.includes.formularios.editarmenu')


                    <!-- Boton flotante derecha -->
                    <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                        <a class="btn-floating btn-large">
                          <i class="mdi-content-add"></i>
                        </a>
                        <ul>
                          <li><a href="#" class="btn-floating yellow darken-1 tooltipped" data-position="left" data-tooltip="Descargar PDF"><i class="large mdi-file-file-download"></i></a></li>
                          <li><a href="#" class="btn-floating green tooltipped" data-position="left" data-tooltip="Historico Menús"><i class="large mdi-editor-insert-invitation"></i></a></li>
                          <li><a href="#actualizarMenu" class="btn-floating blue modal-trigger tooltipped" data-position="left" data-tooltip="Nuevo Menú"><i class="large mdi-action-assignment"></i></a></li>
                        </ul>
                    </div>

                </div>
        </div>
    <!-- INCIO FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2015 <a class="grey-text text-lighten-4" href="#" target="_blank">GeeksLabs</a> All rights reserved.
                <span class="right"> Desarrollado por <a class="grey-text text-lighten-4" href="#">Agencia Web Bogotá</a></span>
            </div>
        </div>
    </footer>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
    <script type="text/javascript" src="js/config.js"></script>
    <script type="text/javascript" src="admin/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="admin/js/materialize.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <script type="text/javascript" src="js/vue.js"></script>
    <script type="text/javascript" src="js/axios.min.js"></script>
    <script type="text/javascript" src="admin/js/indexvue.js"></script>
    <script type="text/javascript" src="admin/js/perfect-scrollbar.min.js"></script>
</body>

</html>