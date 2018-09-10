<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        @include('seo.google')
        @include('seo.facebook')
        <title>Menús Fácil | Nuevo Manager de Pedidos y Menús</title>
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/img/apple-touch-icon-57-precomposed.png">

        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="{{url('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- Material Icons CSS -->
        <link href="{{url('assets/fonts/iconfont/material-icons.css')}}" rel="stylesheet">
        <!-- animate CSS -->
        <link href="{{url('assets/css/animate.min.css')}}" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="{{url('assets/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
        <!-- materialize -->
        <link href="{{url('assets/materialize/css/materialize.min.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- shortcodes -->
        <link href="{{url('assets/css/shortcodes/shortcodes.css')}}" rel="stylesheet">
        <!-- Style CSS -->
        <link href="{{url('style.css')}}" rel="stylesheet">
        <!-- Creative CSS -->
        <link href="{{url('assets/css/skins/creative.css')}}" rel="stylesheet">
        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/revolution/css/settings.css')}}">
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/revolution/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/revolution/css/navigation.css')}}">
    </head>

    <body id="top">
      <!--header start-->
      <header id="header" class="tt-nav transparent-header">

          <div class="header-sticky light-header nav-boxed-color">

              <div class="container">

                  <div id="materialize-menu" class="menuzord">

                      <!--logo start-->
                      {{-- <a href="index.html" class="logo-brand">
                          <img class="logo-dark" src="{{url('assets/img/logo.png')}}" alt="Logo de MenusFacil"/>
                          <img class="logo-light" src="{{url('assets/img/logo-white.png')}}" alt="Logo de MenusFacil"/>
                      </a> --}}
                      <!--logo end-->

                      <!--mega menu start-->
                      <ul class="nav menuzord-menu pull-right op-nav">
                          <li class="active"><a href="#home" data-scroll>Inicio</a></li>
                          <li><a class="funciones">Funciones</a></li>
                          <li><a href="#aplicaciones" data-scroll="500">Aplicaciones</a></li>
                          <li><a href="{{url('registro/partnerts')}}" target="_blank">Conviertete en Partner</a></li>
                          <li><a class="ini-ses" href="/login" data-scroll>Inicia Sesion</a></li>
                          <li><a class="ini-reg" href="/register" data-scroll>Registrate</a></li>
                      </ul>
                      <!--mega menu end-->

                  </div>
              </div>
          </div>
      </header>
      <!--header end-->


        <!-- start revolution slider 5.0 -->
        <section class="rev_slider_wrapper" id="home">
          <h1 style="color:#fff;font-size:32px;display:none">Menús Fácil | manager de menus para restaurantes, hoteles, casinos y comidas rápidas</h1>
         <div class="rev_slider materialize-slider">
          <ul>

            <!-- slide 1 start -->
            <li data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="assets/img/banner/banner-light.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="materialize Material" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{url('assets/img/banner-light.jpg')}}"  alt="banner menús fácil"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption rev-heading text-extrabold dark-text tp-resizeme"
                    data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']"
                    data-y="['middle','middle','top','top']" data-voffset="['-120','-120','40','40']"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="800"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap;"><span class="titulo">Sube a la web tus Menús Fácil</span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption rev-heading text-extrabold dark-text tp-resizeme"
                    data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']"
                    data-y="['middle','middle','top','top']" data-voffset="['-50','-50','100','100']"
                    data-fontsize="['70','70','60','55']"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap;"><span class="titulo2">Recibe y atiende los pedidos<br/>de tus clientes Aún Más Fácil</span>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-3"
                    data-x="['left','left','right','right']" data-hoffset="['20','20','100','0']"
                    data-y="['middle','middle','top','top']" data-voffset="['-200','-170','50','0']"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:1000;transformOrigin:50% 50%;"
                    data-start="1200"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="z-index: 6; width: 80px; height: 300px; white-space: nowrap;">
                    <div class="rs-pulse"  data-easing="Power4.easeInOut" data-zoomstart="1" data-zoomend="0.95"><img class="logo-mf" src="assets/img/logo.svg" alt="logo Menús Fácil"></div>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme dark-text"
                    data-x="['left','left','center','center']" data-hoffset="['30','30','30','30']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['150','50','-190','-190']"
                    data-fontsize="['16','16','16','16']"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1200"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap;"><span class="descp">Pruébalo GRATIS durante 14 días sin compromisos<br/>Sin descargas<br/>Sin tarjeta de crédito ni datos de facturación</span>
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption"
                    data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['60','170','-100','-100']"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-start="1400"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="z-index: 7;">
                    <a href="/register" class="btn btn-prueba"><span>Pruebalo <strong>Gratis</strong></span></a>
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption"
                    data-x="['left','left','center','center']" data-hoffset="['250','290','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['60','170','0','0']"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-start="1600"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="z-index: 7;">
                    <a class="btn btn-conoce funciones"><span>Conoce <strong>las funciones</strong></span></a>
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-2"
                    data-x="['right','right','center','center']" data-hoffset="['-30','-30','0','0']"
                    data-y="['middle','middle','bottom','bottom']" data-voffset="['0','0','-30','-30']"
                    data-transform_idle="o:1;"
                    data-transform_in="x:100px;opacity:0;s:1000;e:Power2.easeOut;"
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="1800"
                    style="z-index: 3;">
                        <div><img src="{{url('assets/img/banner/dummy.png')}}" alt="aplicativo menús fácil en ipad" data-lazyload="assets/img/back-image-app.png">
                        </div>
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-6"
                    data-x="['right','right','center','center']" data-hoffset="['90','90','-70','70']"
                    data-y="['middle','middle','bottom','bottom']" data-voffset="['20','20','-30','-30']"
                    data-transform_idle="o:1;"
                    data-transform_in="x:100px;opacity:0;s:1000;e:Power2.easeOut;"
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2200"
                    style="z-index: 4;">
                        <div><img src="assets/img/banner/dummy.png" alt="aplicativo menús fácil en iphone" data-lazyload="assets/img/front-image-app.png">
                        </div>
                </div>

            </li>
            <!-- slide 1 end -->
          </ul>
         </div><!-- end revolution slider -->
        </section><!-- end of slider wrapper -->

        <section class="banner-20 bg-fixed parallax-bg overlay dark-5 half-height valign-wrapper" data-stellar-background-ratio="0.5">
            <div class="valign-cell">
              <div class="container">

                <div class="text-center wow fadeInUp">
                    <h2 class="section-title text-uppercase text-extrabold white-text">¿De que se trata?</h2>
                    <h3 class="section-sub white-text">Menús Fácil es la aplicación ideal para la gestión de órdenes de clientes</h3>

                    <div class="video-trigger"><a class="popup-video" href="https://www.youtube.com/watch?v=6tyetQTVPT0"><i class="material-icons">&#xE038;</i></a></div>
                </div>
              </div>
            </div>
        </section>

        <section class="feature-presentation padding-top-100" style="background-color:#fcf1e2" id="funciones">
          <div class="container">

              <div class="text-center mb-80 wow fadeInUp">
                  <h2 class="section-title text-uppercase text-extrabold">Características</h2>
                  <h3 class="section-sub">Menús Fácil puede ser implementado en cualquier negocio que cuente con servicio de domicilios, reservas y órdenes de clientes</h3>
              </div>
              <h2 style="color:#fff;font-size:15px;display:none">Menús Fácil - menus para restaurantes, como crear un menú para restaurante</h2>
              <p style="color:#fff;font-size:15px;display:none">Menús Fácil para crear menus para restaurantes, menus de restaurantes, como crear un menú para un restaurante, como crear un sistema de reservas para hoteles</p>

            <div class="row">
                <div class="col-md-4 col-sm-6">

                  <div class="featured-item feature-icon icon-hover right-icon mb-80 wow fadeInLeft" data-wow-delay=".2s">
                      <div class="icon radius-4" style="border-color:#66181a">
                          <i class="material-icons" style="color:#66181a">dvr</i>
                      </div>
                      <div class="desc">
                          <h3>Módulos Administrador y Cliente con los colores, logo y url personalizados</h3>
                      </div>
                  </div>

                  <div class="featured-item feature-icon icon-hover right-icon mb-80 wow fadeInLeft" data-wow-delay=".4s">
                      <div class="icon radius-4" style="border-color:#66181a">
                          <i class="material-icons" style="color:#66181a">input</i>
                      </div>
                      <div class="desc">
                          <h3>Crea Menús y Adiciones desde el módulo administrador en solo segundos y con pocos clics</h3>
                      </div>
                  </div>

                  <div class="featured-item feature-icon icon-hover right-icon wow fadeInLeft" data-wow-delay=".6s">
                      <div class="icon radius-4" style="border-color:#66181a">
                          <i class="material-icons" style="color:#66181a">important_devices</i>
                      </div>
                      <div class="desc">
                          <h3>Visualiza en tiempo real e imprime listas de menús y pedidos de clientes</h3>
                      </div>
                  </div>


                </div><!-- /.col-md-4 -->

                <div class="col-md-4 hidden-sm hidden-xs wow fadeInUp">
                    <img class="img-responsive" src="assets/img/iphone.png" alt="Menús Fácil Módulo Administrador en Iphone">
                </div><!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-6">

                  <div class="featured-item feature-icon icon-hover mb-80 wow fadeInRight" data-wow-delay=".2s">
                      <div class="icon radius-4" style="border-color:#66181a">
                          <i class="material-icons" style="color:#66181a">assessment</i>
                      </div>
                      <div class="desc">
                          <h3>Estadísticas en tiempo real de tus menús creados y vendidos por día y por semana</h3>
                      </div>
                  </div>

                  <div class="featured-item feature-icon icon-hover mb-80 wow fadeInRight" data-wow-delay=".4s">
                      <div class="icon radius-4" style="border-color:#66181a">
                          <i class="material-icons" style="color:#66181a">system_update</i>
                      </div>
                      <div class="desc">
                          <h3>Tus menús creados aparecerán disponibles al instante en el módulo cliente</h3>
                      </div>
                  </div>

                  <div class="featured-item feature-icon icon-hover wow fadeInRight" data-wow-delay=".6s">
                      <div class="icon radius-4" style="border-color:#66181a">
                          <i class="material-icons" style="color:#66181a">archive</i>
                      </div>
                      <div class="desc">
                          <h3>Consulta y descarga histórico de menús creados sin importar si están habilitados o no</h3>
                      </div>
                  </div>
                  <p style="color:#fff;font-size:15px;display:none">Menús Fácil para crear menus para restaurantes, menus de restaurantes, como crear un menú para un restaurante, como crear un sistema de reservas para hoteles</p>

                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

          </div><!-- /.container -->
        </section>


        <section class="process-section color1-bg" id="aplicaciones">
          <div class="container-fluid">
            <div class="row no-gutter equal-height-row overflow-hidden">
              <div class="col-md-9 equal-height-column">

                <div class="process-wrapper">
                  <div class="mb-80">
                      <h2 class="section-title white-text text-uppercase text-extrabold">¿Quienes lo pueden usar?</h2>
                      <h3 class="white-text">Desde el pequeño empresario dueño de restaurante local o comidas rápidas, hasta grandes cadenas de hoteles, restaurantes y casinos.</h3>
                  </div>

                    <div class="row">
                      <div class="col-sm-6 mb-40">
                          <div class="featured-item feature-icon">
                            <div class="icon">
                                <i class="material-icons white-text">local_dining</i>
                            </div>
                            <div class="desc">
                                <h2 class="white-text">Para Restaurantes</h2>
                                <p class="white-text"><span style="color:#e88a10">Tus clientes consultan los menús del día y arman su pedido.</span> Funciona para domicilios o para tomar los pedidos dentro del propio establecimiento.</p>
                            </div>
                          </div><!-- /.featured-item -->
                      </div><!-- /.col-sm-6 -->

                      <div class="col-sm-6 mb-40">
                          <div class="featured-item feature-icon">
                            <div class="icon">
                                <i class="material-icons white-text">local_pizza</i>
                            </div>
                            <div class="desc">
                                <h2 class="white-text">Para Comidas Rápidas</h2>
                                <p class="white-text"><span style="color:#e88a10">No dejes a tus clientes esperando un turno para tomar su orden.</span> Agiliza los pedidos con este novedoso sistema ¡Tus clientes te amarán!</p>
                            </div>
                          </div><!-- /.featured-item -->
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6">
                          <div class="featured-item feature-icon">
                            <div class="icon">
                                <i class="material-icons white-text">hotel</i>
                            </div>
                            <div class="desc">
                                <h2 class="white-text">Para Hoteles</h2>
                                <p class="white-text"><span style="color:#e88a10">No molestes a tus huespedes con complejos sistemas de reservas.</span> Asegurate horas antes de cuantos huespedes tendrás en la mesa y que menú han elegido.</p>
                            </div>
                          </div><!-- /.featured-item -->
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6">
                          <div class="featured-item feature-icon">
                            <div class="icon">
                                <i class="material-icons white-text">room_service</i>
                            </div>
                            <div class="desc">
                                <h2 class="white-text">Para Casinos</h2>
                                <p class="white-text"><span style="color:#e88a10">No más retrasos en las órdenes ni recursos desperdiciados.</span> El personal elige su menú y en la cocina sabrán por anticipado cuantos y cuales platos servir. </p>
                            </div>
                          </div><!-- /.featured-item -->
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </div><!-- /.process-wrapper -->
              </div>
              <div class="col-md-3 equal-height-column process-bg-wrapper">
                <img src="{{url('assets/img/cena.jpg')}}" alt="Dueños de restaurante usando menus facil">
              </div>
            </div>
          </div>
        </section>



        <section class="padding-top-100" style="background-color:#fcf1e2">
          <div class="container">

                <div class="text-center mb-50 wow fadeInUp">
                    <h2 class="section-title text-uppercase text-extrabold">Screenshots</h2>
                    <h3 class="section-sub">No es necesario realizar ninguna instalación, simplemente ingresando con tu usuario y contraseña tendrás acceso al módulo de administración</h3>
                </div>
              <div class="col-md-10 col-md-offset-1 screenshot-carousel-wrapper">

                <div class="device-mockup" data-device="ipad" data-color="white" data-orientation="landscape">
                  <div class="device">
                    <div class="screen">

                      <!-- START BOOTSTRAP CAROUSEL -->
                      <div id="screenshot-carousel" class="carousel slide screenshot-carousel" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                          <div class="item active">
                            <img src="{{url('assets/img/screenshot-1.jpg')}}" alt="Screenshot Aplicativo Menús Fácil" title="Menús Fácil Aplicativo" />
                          </div>

                          <div class="item">
                            <img src="{{url('assets/img/screenshot-3.jpg')}}" alt="Screenshot Aplicativo Menús Fácil" title="Menús Fácil Aplicativo" />
                          </div>

                          <div class="item">
                            <img src="{{url('assets/img/screenshot-2.jpg')}}" alt="Screenshot Aplicativo Menús Fácil" title="Menús Fácil Aplicativo" />
                          </div>

                        </div>

                      </div>
                      <!-- END BOOTSTRAP CAROUSEL -->

                    </div><!-- /.screen -->
                  </div><!-- /.device -->
                </div><!-- /.device-mockup -->

                <!-- Controls -->
                <a class="left carousel-control z-depth-2 color2-bg" href="#screenshot-carousel" role="button" data-slide="prev">
                  <span class="fa fa-angle-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control color2-bg" href="#screenshot-carousel" role="button" data-slide="next">
                  <span class="fa fa-angle-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>

              </div>

          </div>
        </section>
        <p style="color:#fff;font-size:15px;display:none">Menús Fácil para crear menus para restaurantes, menus de restaurantes, como crear un menú para un restaurante, como crear un sistema de reservas para hoteles</p>
        <section class="ptb-90 gray-bg">
            <div class="container">
                <div class="text-center wow fadeInUp">
                    <!--promo box center align start-->
                    <h2 class="text-uppercase mb-30 font-30 text-extrabold">Prueba GRATIS Menús Fácil en tu negocio</h2>
                    <h2 class="mb-30">Sin descargas, sin tarjeta de crédito, sin compromisos</h2>

                    <a href="/register" class="btn btn-prueba"> <span>Comienza <strong>AHORA</strong></span></a>
                    <!--promo box center align end-->
                </div>
            </div>
        </section>

        <section class="section-padding lighten-4" style="background-color:#f5f5f5;margin-top:-70px">
            <div class="container">
              <div class="row">
                <div class="col l6 m6 s12 light-grey-text">
                	<img src="assets/img/oferta-de-lanzamiento.png" width="400" height="112" alt="Oferta de lanzamiento Menús Fácil" class="img-responsive">
                	<p style="color:#2b2831">Conviertete en Usuario Premium con suscripción mensual y disfruta de todos los beneficios que tenemos para ti:</p>

                	<ul class="list-icon mb-30" style="color:#2b2831">
                		<li><i class="material-icons">&#xE876;</i> Aplicativo con los colores y el logo de tu negocio</li>
                		<li><i class="material-icons">&#xE876;</i> Accede a documentación exclusiva de administración y configuración</li>
                		<li><i class="material-icons">&#xE876;</i> Obtén increíbles descuentos por pagar por adelantado</li>
                	</ul>
                </div><!-- /.col-md-7 -->

                <div class="col l6 m6 s12">
					         <img src="assets/img/seo-info-light.png" alt="Suscripción a Menús Fácil" class="img-responsive">
                </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
                <div class="row">
                  <div class="col m4 offset-m4 s4 offset-s3 l4 offset-l5">
                    <a href="/login" class="btn btn-prueba" style="background-color:#e88a10 !important; margin-top:20px;"> <span>Actualiza <strong>AHORA</strong></span></a>
                  </div>
                  <div class="col m5 offset-m3 s6 offset-s3 l4 offset-l4">
                    <img src="assets/img/como-pagar-menusfacil.png" alt="medios de pago menus facil" style="margin-top:30px" class="img-responsive">
                  </div>
                </div>
            </div><!-- /.container -->

        </section>

        <footer class="footer footer-four">
            <div class="primary-footer color1-bg text-center" style="padding-bottom:30px">
                <div class="container">

                  <a href="#top" class="page-scroll btn-floating btn-large color3-bg back-top waves-effect waves-light wow fadeInUp" data-section="#top">
                    <i class="material-icons">&#xE316;</i>
                  </a>


                  <div class="row">
                    <div class="col-md-12">
                          <div class="logo-footer wow fadeInUp">
                            <img src="assets/img/logo-fondo-oscuro.svg" alt="Logo menus facil fondo oscuro">
                          </div>
                          <span class="copy-text">Menús Fácil &copy; 2018 &nbsp; | &nbsp;  Todos los derechos reservados &nbsp; | &nbsp;  Powered By <a href="http://agenciawebbogota.com/" target="_blank">Agencia Web Bogotá</a></span>
                    </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.primary-footer -->
        </footer>
        <!--footer 4 end-->


        <!-- Preloader -->
        <div id="preloader">
          <div class="preloader-position">
            <img src="/img/logo2.png" width="200" height="192" alt="logo" >
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader -->



        <!-- jQuery -->
        <script src="{{url('assets/js/jquery-2.1.3.min.js')}}"></script>
        <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{url('assets/materialize/js/materialize.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.easing.min.js')}}"></script>
        <script src="{{url('assets/js/smoothscroll.min.js')}}"></script>
        <script src="{{url('assets/js/imagesloaded.js')}}"></script>
        <script src="{{url('assets/js/jquery.stellar.min.js')}}"></script>
        <script src="{{url('assets/js/menuzord.js')}}"></script>
        <script src="{{url('assets/js/equalheight.js')}}"></script>
        <script src="{{url('assets/js/wow.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.shuffle.min.js')}}"></script>
        <script src="{{url('assets/flexSlider/jquery.flexslider-min.js')}}"></script>
        <script src="{{url('assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>

        <script>
            new WOW({
                mobile:  false
            }).init();
        </script>


        <!-- RS5.0 Core JS Files -->
        <script src="{{url('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{url('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- RS5.0 Init  -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
               jQuery(".materialize-slider").revolution({
                    sliderType:"standard",
                    sliderLayout:"fullwidth",
                    delay:9000,
                    responsiveLevels:[1240,1024,768,480],
                    gridwidth:[1140,1024,778,480],
                    gridheight:[800,800,850,850],
                    disableProgressBar:"on",
                    parallax: {
                        type:"mouse",
                        origo:"slidercenter",
                        speed:2000,
                        levels:[2,3,4,5,6,7,12,16,10,50],
                    }
                });
            });

            // Animar la acción de los links
            // let contacto = $('#contac-wrapper');
            let scrolForm = $('#funciones').offset().top + 780;
            // let servicios = $('.servicios').offset().top
            $('.funciones').click((e) => {
              e.preventDefault()
              alert('funciones')
              $('body,html').animate({'scrollTop':scrolForm+100}, 2000)
            })
            $('.funcion').click((e) => {
              e.preventDefault()
              $('body,html').animate({'scrollTop':scrolForm+100}, 2000)
            })
            // $('.linkServicios').click((e) => {
            //   $('body,html').animate({'scrollTop':servicios}, 2000)
            // })
        </script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->

        <script type="text/javascript" src="{{url('assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>

    </body>

</html>
