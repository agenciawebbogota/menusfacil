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
  <div id="dash">
    @yield('contenido')


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
    <!-- Vue.js -->
    <script type="text/javascript" src="js/materialize-paginacion.js"></script>
    <script type="text/javascript" src="js/axios.min.js"></script>
    <script type="text/javascript" src="js/vue.js"></script>
    <script type="text/javascript" src="js/indexvue.js"></script>
</body>
</html>
