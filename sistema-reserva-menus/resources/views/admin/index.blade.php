<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Menus Fácil</title>
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
                <div class="nav-wrapper" style="background-color: #2a2730">
                    <ul class="left">
                      <li><a class="brand-logo center darken-1"><img src="admin/img/logo-menusfacil.svg" alt="Menus Facil Logo"></a></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
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
                    <li class="user-details darken-2" style="background-color:#e88a10">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="admin/img/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn">Luis Fernando</a>
                            <p class="user-roal">Administrador</p>
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
                            <li>
                              <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="mdi-hardware-keyboard-tab"></i> Salir
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                            </li>
                        </ul>
                    <!-- </div> -->
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light yellow"><i class="mdi-navigation-menu" style="background-color: #e88a10;color:white"></i></a>
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
                                      <div class="move-up header-tabla" style="background-color: #66181a">
                                        <h2 class="titulo-tabla">Tabla de menús</h2>
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right tooltipped" data-position="bottom" data-tooltip="Crear nuevo menú" style="background-color: #e88a10"><i class="mdi-content-add activator"></i></a>
                                        <a href="/descarga/menus" target="_blank" class="btn-floating btn-move-up waves-effect waves-light darken-2 right tooltipped" data-position="bottom" data-tooltip="Ver o imprimir menús" style="background-color:#e88a10"><i class="mdi-editor-vertical-align-bottom"></i></a>
                                      </div>
                                  </div>
                                  <div class="card-content fondo-tabla" style="background: linear-gradient(#ffffff, #ffdbad)">
                                    <div style="overflow:scroll;height:350px">
                                  		@include('admin.includes.recursos.tabla')
                                    </div>
                                  </div>
                                  <!-- Formulario -->
                                  <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Crear Nuevo Menu <i class="mdi-navigation-close right"></i></span>


                                        <div class="row">
                                          <div class="col s12 m12 l12">
                                      			@include('admin.includes.formularios.agregarmenu')
                                          </div>
                                        </div>s
                                  </div>

                              </div>
                          </div>

                          <div class="col s12 m12 l4">
                              <div class="card tabla-pedidos" style="height:470px;background-color: #2a2730">
                                  <div class="card-move-up waves-block waves-light">
                                    <h2 class="titulo-pedidos">Ultimas Ordenes</h2>
                                      <div class="move-up">
                                      	@include('admin.includes.recursos.solicitados')
                                      </div>
                                  </div>
                                  <div class="card-content">
                                    <a href="/descarga/pedidos" target="_blank" class="btn-floating btn-move-up waves-effect waves-light darken-2 center tooltipped" data-position="right" data-tooltip="Ver o imprimir pedidos" style="background-color:#e88a10"><i class="mdi-file-file-download"></i></a>
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
                                  <div class="card-content white-text" style="background-color: #66181a">
                                      <p class="card-stats-title"><i class="mdi-social-group-add"></i> Menus Disponibles</p>
                                      <h4 class="card-stats-number">@{{ total }}</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                      </p>
                                  </div>
                                  <div class="card-action darken-2" style="background-color: #66181a">
                                      <div id="clients-bar" class="center-align"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col s12 m6 l3">
                              <div class="card">
                                  <div class="card-content lighten-1 white-text" style="background-color: #e88a10">
                                      <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Ordenes Hoy</p>
                                      <h4 class="card-stats-number" v-model="pedidos">@{{pedidos.length}}</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">@{{ fecha }}</span>
                                      </p>
                                  </div>
                                  <div class="card-action darken-2" style="background-color: #e88a10">
                                      <div id="invoice-line" class="center-align"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col s12 m6 l3">
                              <div class="card">
                                  <div class="card-content white-text" style="background-color: #66181a">
                                      <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Vendido Hoy</p>
                                      <h4 class="card-stats-number">$806.52</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                      </p>
                                  </div>
                                  <div class="card-action darken-2" style="background-color: #66181a">
                                      <div id="profit-tristate" class="center-align"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col s12 m6 l3">
                              <div class="card">
                                  <div class="card-content white-text" style="background-color:#e88a10">
                                      <p class="card-stats-title"><i class="mdi-editor-attach-money"></i> Vendido Semana</p>
                                      <h4 class="card-stats-number">$8990.63</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                      </p>
                                  </div>
                                  <div class="card-action darken-2" style="background-color:#e88a10">
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
                          <i class="mdi-content-add" style="background-color:#66181a"></i>
                        </a>
                        <ul>
                          <li><a href="#" class="btn-floating red darken-1 tooltipped" data-position="left" data-tooltip="Descargar ordenes"><i class="large mdi-file-file-download"></i></a></li>
                          <li><a href="#" class="btn-floating yellow darken-1 tooltipped" data-position="left" data-tooltip="Descargar menús"><i class="large mdi-file-file-download"></i></a></li>
                          <li><a href="#" class="btn-floating green tooltipped" data-position="left" data-tooltip="Historico menús"><i class="large mdi-editor-insert-invitation"></i></a></li>
                          <li><a href="#" class="btn-floating blue darken-1 tooltipped" data-position="left" data-tooltip="Crear Menús"><i class="large mdi-content-add"></i></a></li>
                        </ul>
                    </div>

                </div>
        </div>
    <!-- INCIO FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container" style="background-color:#2a2730">
              <span class="left"> Desarrollado por <a class="grey-text text-lighten-4" href="#">Agencia Web Bogotá</a></span>
              <span class="right">Todos los derechos reservados ©</span>
            </div>
        </div>
    </footer>
	<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
    <script type="text/javascript" src="js/config.js"></script>
    <script type="text/javascript" src="admin/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="admin/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/plugins.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>
    <script type="text/javascript" src="admin/js/plugins.js"></script>
    <script type="text/javascript" src="js/vue.js"></script>
    <script type="text/javascript" src="js/axios.min.js"></script>
    <script type="text/javascript" src="admin/js/indexvue.js"></script>
    <script type="text/javascript" src="admin/js/perfect-scrollbar.min.js"></script>

</body>

</html>
