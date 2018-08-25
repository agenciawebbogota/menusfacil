@extends('super_usuario.layouts.admin')
@section('contenido')


  <div class="card-content" style="overflow:scroll;height:450px;background: linear-gradient(#ffffff, #e5e5e5)">
    @include('super_usuario.includes.tabla')
  </div>



{{--  Modal para la edicion de los usuarios --}}
  @include('super_usuario.includes.modals.editar')

@endsection
