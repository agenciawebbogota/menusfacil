<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>inicio</title>
  <link href="{{ url('sesion/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <div id="login-page" class="row">
    <div class="col s8 l4 z-depth-4 offset-l4 offset-s2 card-panel">
      <form class="login-form col l8 offset-l2" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" " id="login">
        @csrf
        <div class="row">
          <div class="input-field col l12 s10 m12 offset-s2 offset-m2 center">
            <img src="{{url('admin/img/logo-menusfacil.svg')}}" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">MenusFácil</p>
          </div>

          <div class="input-field col l12 s10 m12 offset-s2 offset-m2">
            <i class="material-icons prefix">person</i>
            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
            <label for="email">Correo</label>
             @if ($errors->has('email'))
              <span class="red-text">{{ $errors->first('email') }}</span>
            @endif
          </div>


          <div class="input-field col l12 s10 m12 offset-s2 offset-m2">
            <i class="material-icons prefix">lock</i>
            <input id="password" type="password" name="password">
            <label for="password">Contraseña</label>
            @if ($errors->has('password'))
              <span class="red-text">{{ $errors->first('password') }}</span>
            @endif
          </div>

          <div class="input-field col l12 s10 m12 offset-s2 offset-m2 login-text switch">
              <div class="switch">
                <label>
                  <span style="margin-left: 55px">Recordarme</span>
                  <input type="checkbox" name="remenber" {{ old('remember') ? 'checked' : '' }}>
                  <span class="lever"></span>
                </label>
              </div>
          </div>
            <button type="submit" class="btn btn-primary col l12 s10 m12 offset-s2 offset-m2">
                Iniciar
            </button>
          <div class="input-field col s4 l6 offset-s2">
            <p class="medium-small"><a href="{{ route('register') }}">Registrate Ahora</a></p>
          </div>
          <div class="input-field col s4 l6 offset-s2">
              <p class="right-align medium-small"><a href="{{ route('password.request')}}">¿Perdiste tu clave?</a></p>
          </div>
        </div>

      </form>
    </div>
  </div>
  <script src="{{ url('sesion/js/app.js') }}" defer></script>
</body>
</html>
