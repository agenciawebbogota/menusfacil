@extends('partnerts.layouts.app')
@section('contenido')

  <div class="row">
    <div class="col l8 offset-l2 center-align flow-text">
      <p>Registrate a nuestro plan de referidos y vuelvete Partnert de MenusFacil.</p>
        <p>
          Obten un 10 % del valor que pague cada usuario referido por ti, lo mejor es que te pagamos este valor hasta que el usuario esté activo en nuestro sistema de MenusFacil.
        </p>
    </div>
  </div>
  @include('partnerts.formularios.registro')
@endsection
