@extends('layouts.app')

@section('content')
<div class="container" id="registrar">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Regitrarme</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre de la empresa</label>

                            <div class="col-md-6">
                                <input id="name" @keyup="urlLug()" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" v-model="datos.name" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>
                            <div class="col-md-6">
                                <input id="email" type="email" v-model="datos.email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- Colores --}}
                        {{-- Color 1:  2a2730 --}}
                        {{-- Color 2:  66181a --}}
                        {{-- Color 3:  E88A10 --}}
                        {{-- Columnas adicionales --}}

                        {{-- <div class="form-group row">

                            <div class="col-md-6"> --}}
                                <input id="url" type="hidden" name="url" v-model="datos.url">
                            {{-- </div>
                        </div>

                        <div class="form-group row"> --}}
                            {{-- <label for="color1" class="col-md-4 col-form-label text-md-right">{{ __('Color 1') }}</label> --}}

                            {{-- <div class="col-md-6"> --}}
                                <input id="color1" type="hidden" {{-- class="form-control{{ $errors->has('color1') ? ' is-invalid' : '' }}"--}} name="color1" value="#2a2730" {{--required autofocus v-model="datos.color1"--}}>
                                {{-- @if ($errors->has('color1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('color1') }}</strong>
                                    </span>
                                @endif --}}
                            {{-- </div>
                        </div>
                        <div class="form-group row"> --}}
                            {{-- <label for="color2" class="col-md-4 col-form-label text-md-right">{{ __('Color 2') }}</label> --}}

                            {{-- <div class="col-md-6"> --}}
                                 <input id="color2" type="hidden" {{--class="form-control{{ $errors->has('color2') ? ' is-invalid' : '' }}" required autofocus  v-model="datos.color2"--}} name="color2" value="#66181a">

                                {{-- @if ($errors->has('color2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('color2') }}</strong>
                                    </span>
                                @endif --}}
                            {{-- </div>
                        </div>
                         <div class="form-group row"> --}}
                            {{-- <label for="color3" class="col-md-4 col-form-label text-md-right">{{ __('Color 3') }}</label> --}}

                            {{-- <div class="col-md-6"> --}}
                                <input id="color3" type="hidden" {{--class="form-control{{ $errors->has('color3') ? ' is-invalid' : '' }}" required autofocus v-model="datos.color3"--}} name="color3" value="#E88A10">

                                {{-- @if ($errors->has('color3'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('color3') }}</strong>
                                    </span>
                                @endif --}}
                            {{-- </div>
                        </div> --}}

                        {{-- Fin --}}

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required v-model="datos.password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required v-model="datos.password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Regitrarme
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <pre>
        @{{ $data.datos }}
    </pre> --}}
</div>
@endsection