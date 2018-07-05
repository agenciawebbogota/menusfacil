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
    <!--jsgrid css-->
    <link href="js/jsgrid/css/jsgrid.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/jsgrid/css/jsgrid-theme.min.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body>
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

  <!-- PRINCIPAL -->
    <div id="main">
        <!-- INCIO WRAPPER -->
        <div class="wrapper">

            <!-- INICIO MENU IZQUIERDA-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn">{{ Auth::user()->name }}</a>
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
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi-hardware-keyboard-tab"></i> Salir</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </div>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light yellow"><i class="mdi-navigation-menu" style="color:red"></i></a>
            </aside>
            <!-- FIN MENU IZQUIERDA-->

            <!-- INCIO CONTENIDO -->
            <section id="content">

                <!--contenedor-->
                <div class="container" style="padding-top:32px;padding-bottom:32px">

                  <!--chart dashboard start-->
                  <div id="chart-dashboard">
                      <div class="row">
                          <div class="col s12 m12 l8">
                              <div class="card">
                                  <div class="card-move-up waves-effect waves-block waves-light">
                                      <div class="move-up cyan darken-1">
                                        <p></p>
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                      </div>
                                  </div>
                                  <div class="card-content">
                                    <div style="overflow:scroll;height:350px">
                                      <div class="col s12 m12 l12">
                                          <div id="jsGrid-basic"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Formulario -->
                                  <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Crear Nuevo Menu <i class="mdi-navigation-close right"></i></span>
                                      <div id="input-fields">
                                        <div class="row">
                                          <div class="col s12 m8 l9">
                                            <div class="row">
                                              <form class="col s12">
                                                <div class="row">
                                                  <div class="input-field col s6">
                                                    <i class="mdi-editor-border-color prefix"></i>
                                                    <input id="nombre" type="text" class="validate">
                                                    <label for="nombre">Nombre</label>
                                                  </div>
                                                  <div class="input-field col s12">
                                                    <i class="mdi-content-filter-list prefix"></i>
                                                    <input id="descripcion" type="text" class="validate">
                                                    <label for="descripcion">Descripción</label>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="input-field col s12">
                                                    <i class="mdi-editor-attach-money prefix"></i>
                                                    <input id="precio" type="number" class="validate">
                                                    <label for="precio">Precio</label>
                                                  </div>
                                                </div>
                                                <div id="input-switches" class="section">
                                                  <div class="row">
                                                    <div class="col s12 m8 l9">
                                                      <!-- Switch -->
                                                      <div class="switch">
                                                        Disponible :
                                                        <label>
                                                          NO
                                                          <input type="checkbox">
                                                          <span class="lever"></span> SI
                                                        </label>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col s12 offset-s8">
                                        <button class="btn waves-effect waves-light " type="submit" name="action">Guardar
                                          <i class="mdi-content-send right"></i> </button>
                                      </div>
                                  </div>

                              </div>
                          </div>

                          <div class="col s12 m12 l4">
                              <div class="card teal" style="height:440px">
                                  <div class="card-move-up teal waves-block waves-light">
                                      <div class="move-up">
                                        <ul class="menus-solicitados">
                                          <li><h4 class="center-align">Menús Solicitados</h4></li>
                                          <li><span>Luis Fernando Raga</span> .............Menú <span>No. 1</span></li>
                                          <li><span>Luis Fernando Raga</span> .............Menú <span>No. 1</span></li>
                                          <li><span>Luis Fernando Raga</span> .............Menú <span>No. 1</span></li>
                                          <li><span>Luis Fernando Raga</span> .............Menú <span>No. 1</span></li>
                                          <li><span>Luis Fernando Raga</span> .............Menú <span>No. 1</span></li>
                                          <li><span>Luis Fernando Raga</span> .............Menú <span>No. 1</span></li>
                                          <li><span>Luis Fernando Raga</span> .............Menú <span>No. 1</span></li>
                                          <li><span>Luis Fernando Raga</span> .............Menú <span>No. 1</span></li>
                                          <li><span>Luis Fernando Raga</span> .............Menú <span>No. 1</span></li>

                                        </ul>
                                      </div>
                                  </div>
                                  <div class="card-content teal">
                                    <a class="btn-floating btn-move-up waves-effect waves-light darken-2 center tooltipped" data-position="right" data-tooltip="Ver o imprimir pedidos"><i class="mdi-content-add activator"></i></a>
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
                                      <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                      <h4 class="card-stats-number">566</h4>
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
                                      <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
                                      <h4 class="card-stats-number">1806</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
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
                  <!--card stats end-->

                  <!-- //////////////////////////////////////////////////////////////////////////// -->



                    <!--Incio Modal-->
                     <div id="modal1" class="modal">
                        <div class="modal-content">
                          <div id="input-fields">
                            <h4 class="header center-align">Crear Nuevo Menu</h4>
                            <div class="row">
                              <div class="col s12 m8 l9">
                                <div class="row">
                                  <form class="col s12">
                                    <div class="row">
                                      <div class="input-field col s6">
                                        <i class="mdi-editor-border-color prefix"></i>
                                        <input id="nombre" type="text" class="validate">
                                        <label for="nombre">Nombre</label>
                                      </div>
                                      <div class="input-field col s12">
                                        <i class="mdi-content-filter-list prefix"></i>
                                        <input id="descripcion" type="text" class="validate">
                                        <label for="descripcion">Descripción</label>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="input-field col s12">
                                        <i class="mdi-editor-attach-money prefix"></i>
                                        <input id="precio" type="number" class="validate">
                                        <label for="precio">Precio</label>
                                      </div>
                                    </div>
                                    <div id="input-switches" class="section">
                                      <div class="row">
                                        <div class="col s12 m8 l9">
                                          <!-- Switch -->
                                          <div class="switch">
                                            Disponible :
                                            <label>
                                              NO
                                              <input type="checkbox">
                                              <span class="lever"></span> SI
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn waves-effect waves-light " type="submit" name="action">Guardar
                            <i class="mdi-content-send right"></i> </button>
                        </div>
                      </div>
                      <!--Fin Modal-->

                    <!-- Boton flotante derecha -->
                    <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                        <a class="btn-floating btn-large">
                          <i class="mdi-content-add"></i>
                        </a>
                        <ul>
                          <!-- <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li> -->
                          <li><a href="#" class="btn-floating yellow darken-1 tooltipped" data-position="left" data-tooltip="Descargar PDF"><i class="large mdi-file-file-download"></i></a></li>
                          <li><a href="#" class="btn-floating green tooltipped" data-position="left" data-tooltip="Historico Menús"><i class="large mdi-editor-insert-invitation"></i></a></li>
                          <li><a href="#modal1" class="btn-floating blue modal-trigger tooltipped" data-position="left" data-tooltip="Nuevo Menú"><i class="large mdi-action-assignment"></i></a></li>
                        </ul>
                    </div>
                    <!-- Boton flotante derecha -->

                </div>
                <!--fin contenedor-->
            </section>
            <!-- FIN CONTENIDO -->
        </div>
        <!-- FIN WRAPPER -->

    </div>
    <!-- FIN PRINCIPAL -->

    <!-- INCIO FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2015 <a class="grey-text text-lighten-4" href="#" target="_blank">GeeksLabs</a> All rights reserved.
                <span class="right"> Desarrollado por <a class="grey-text text-lighten-4" href="#">Agencia Web Bogotá</a></span>
            </div>
        </div>
    </footer>
    <!-- FIN FOOTER -->
    <!-- ========Scripts============================ -->
    <!-- Libreria jQuery -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--jsgrid-->
    <script type="text/javascript" src="js/jsgrid/js/db.js"></script> 
    <!--data-->
    <script type="text/javascript" src="js/jsgrid/js/jsgrid.min.js"></script>
    <script type="text/javascript" src="js/jsgrid/js/jsgrid-script.js"></script>
    <!--plugins.js-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/perfect-scrollbar/perfect-scrollbar.min.js"></script>
</body>
</html>
