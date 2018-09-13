<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio de Sesión | Menús Fácil</title>
  <link href="{{ url('sesion/css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="padding-top:30px;background-image:url(/img/bg-login.jpg);background-repeat:no-repeat">
  <div class="row">
    <div class="col-md-12">
          <div class="brand-logo center">
            <img src="/admin/img/logo-menusfacil.svg" alt="Logo menus facil fondo oscuro" width="220">
          </div>
    </div><!-- /.col-md-12 -->
  </div><!-- /.row -->
  <div id="login-page" class="row">
    <div class="col s10 l4 z-depth-4 offset-l4 offset-s1 card-panel">
      <form class="login-form col l8 m8 offset-l2 s12 offset-s2" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" id="login">
        @csrf
        {{-- <div class="row"> --}}
          <div class="input-field col l12 s8 m12 offset-m2 center">
            {{-- <img src="{{url('admin/img/logo-menusfacil.svg')}}" alt="" class="circle responsive-img valign profile-image-login"> --}}
            <p class="center login-form-text">Bienvenid@</p>
          </div>


          <div class="row">
            <div class="input-field col l12 s8 m10 offset-m3">
              <i class="material-icons prefix">person</i>
              <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
              <label for="email">Correo Electrónico</label>
               @if ($errors->has('email'))
                <span class="red-text">{{ $errors->first('email') }}</span>
              @endif
            </div>
          </div>

          <div class="row">

            <div class="input-field col l12 s8 m10 offset-m3">
              <i class="material-icons prefix">lock</i>
              <input id="password" type="password" name="password">
              <label for="password">Contraseña</label>
              @if ($errors->has('password'))
                <span class="red-text">{{ $errors->first('password') }}</span>
              @endif
            </div>

          <div>


          <div class="row">
            <div class="input-field col l12 s8 m10 offset-m3 login-text switch">
              <div class="switch">
                <label>
                  <span style="margin-left: 55px">Recordarme</span>
                  <input type="checkbox" name="remenber" {{ old('remember') ? 'checked' : '' }}>
                  <span class="lever"></span>
                </label>
              </div>
            </div>


            <button type="submit" class="btn btn-primary col l12 s8 m10 offset-m3" style="background-color:#e88a10">
                Iniciar Sesión
            </button>
            <div class="col l12 s8 m12 offset-m2" style="padding-top:20px;text-align:center">
              <p class="medium-small"><a href="{{ route('register') }}">¿No tienes una cuenta? Prúebalo gratis por 14 días</a></p>
            </div>
            <div class="col l12 s8 m12 offset-m2" style="padding-top:20px;text-align:center">
              <p class="medium-small"><a href="{{ route('password.request')}}">¿Perdiste tu clave?</a></p>
            </div>
      </form>
    </div>
  </div>
  <script src="{{ url('sesion/js/app.js') }}" defer></script>
</body>
</html>
