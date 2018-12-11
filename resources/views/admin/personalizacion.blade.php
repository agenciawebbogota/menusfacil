<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizar Cuenta || Menús Fácil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="/personalizar/css/app.min.css">
  <link rel="stylesheet" href="/personalizar/css/app.css">
  <link rel="icon" href="/admin/img/favicon.png" sizes="32x32">
  <style>
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
    <main class="">
      <div>
      <nav>
        <a class="brand-logo center">
          <img src="/admin/img/logo-menusfacil.svg" alt="Menus Facil Logo" width="200px" class="imagen-logo">
        </a>
      </nav>
    </div>


<section class="ptb-30 gray-bg pers">
        {{-- Contenido --}}

        <div class="titulos-pers">
            <h2>Personaliza tu aplicativo</h2>
            <p>En esta sección puedes aplicar los colores y logotipo de tu negocio</p>
        </div>

        <div class="row">
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content white-text card-nombre">
                        <p class="card-stats-title">Nombre del Negocio:</p>
                        <input type="text" value="{{ Auth::user()->name }}">
                        <button class="btn btn-act">Actualizar</button>                       
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content white-text card-nombre">
                        <p class="card-stats-title">Color Primario:</p>
                        <input type="text" value="{{ Auth::user()->color1 }}">
                        <button class="btn btn-act">Actualizar</button>                       
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content white-text card-nombre">
                        <p class="card-stats-title">Color Secundario:</p>
                        <input type="text" value="{{ Auth::user()->color2 }}">
                        <button class="btn btn-act">Actualizar</button>                       
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content white-text card-nombre">
                        <p class="card-stats-title">Color Terciario:</p>
                        <input type="text" value="{{ Auth::user()->color3 }}">
                        <button class="btn btn-act">Actualizar</button>                       
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col m4 s12">
                <div class="card">
                <div class="card-content logo1">
                        <img src="/img/logo-menusfacil.png" width="150"  height="auto" alt="">
                        <h4 class="card-title">Logo para fondo claro</h4>
                        <p class="card-text">200 x 200 Formatos admitidos: .svg .png .jpg</p>
                        <div class="input-files">
                            <label for="input-image" ><img src="/img/boton-upload.png"></label>
                            <button class="btn btn-act-img">Actualizar</button>
                            <input type="file" class="input-image" id="input-image" accept="image/png, .jpeg, .jpg, image/gif">
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col m4 s12">
                <div class="card">
                    <div class="card-content logo2">
                        <img src="/img/logo.png" width="150"  height="auto" alt="">
                        <h4 class="card-title">Logo para fondo oscuro</h4>
                        <p class="card-text">200 x 200 Formatos admitidos: .svg .png .jpg</p>
                        <div class="input-files">
                            <label for="input-image" ><img src="/img/boton-upload.png"></label>
                            <button class="btn btn-act-img">Actualizar</button>
                            <input type="file" class="input-image" id="input-image" accept="image/png, .jpeg, .jpg, image/gif">
                        </div> 
                    </div>
                </div>
            </div>



            <div class="col m4 s12">
                <div class="card">
                    <div class="card-content logo1">
                        <img src="/img/logo-menusfacil.png" width="150"  height="auto" alt="">
                        <h4 class="card-title">Imagen de Perfil</h4>
                        <p class="card-text">200 x 200 Formatos admitidos: .svg .png .jpg</p>
                        <div class="input-files">
                            <label for="input-image" ><img src="/img/boton-upload.png"></label>
                            <button class="btn btn-act-img">Actualizar</button>
                            <input type="file" class="input-image" id="input-image" accept="image/png, .jpeg, .jpg, image/gif">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card">
                        <div class="card-content">
                            <p class="card-stats-title">Código QR único del negocio</p>
                            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(350)->generate(url('cliente/'.Auth::user()->url))) !!} " class="materialboxed">
                        </div>
                        
                    </div>
                </div>
                <div class="col s12 m12">
                    <div class="card">
                        <div class="card-content">
                            <p class="card-stats-title">URL única del negocio</p>
                        <p>{{ url(Auth::user()->url) }}</p>
                        {{-- </div>
                        <div class="card-content"> --}}
                            <p class="card-stats-title">Correo electrónico Registrado</p>
                            <p>{{Auth::user()->email}}</p>
                        {{-- </div>
                        <div class="card-content"> --}}
                            <p class="card-stats-title">URL única del negocio</p>
                            <a href="{{ url('cliente/'.Auth::user()->url) }}" target="_blank">{{ url('cliente/'.Auth::user()->url) }}</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
</section>



    <footer class="page-footer" style="background-color:#2a2730">
        <div class="footer-copyright">
            <div class="container">
                <span class="text-center">Todos los derechos reservados</span>
            </div>
        </div>
    </footer>
    </main>
    <script type="text/javascript" src="/personalizar/js/app.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.materialboxed');
            var instances = M.Materialbox.init(elems, {});
        });
    
    </script>
</body>
</html>
