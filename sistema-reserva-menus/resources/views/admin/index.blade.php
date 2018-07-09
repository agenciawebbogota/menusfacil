@extends('admin.layouts.admin')
@section('contenido')
<div class="row">
  <div class="col s8">
    <div class="card" style="overflow:scroll;height:450px">
      <div class="card-image red waves-effect waves-block waves-light">
          {{-- <h5 class="center-align">Tabla de menus creados</h5> --}}
          <p></p>
          <a class="btn-floating btn-move-up waves-effect waves-light right" style="margin: 10px"><i class="large material-icons activator">add</i></a>
          <a href="/descarga/menusCreados" target="_blanck" style="margin: 10px" class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="large material-icons">file_download</i></a>
      </div>
      <div class="card-content">
          @include('admin.includes.recursos.tabla')
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4 center-align">Crear Nuevo Menu<i class="material-icons right">close</i></span>
        @include('admin.includes.formularios.agregarmenu')
      </div>
    </div>
    
    
  </div>


  <div class="col s4">
    @include('admin.includes.recursos.solicitados')
  </div>








</div>



































  <!-- Modal editar menu -->
  @include('admin.includes.formularios.editarmenu')
  {{-- expr --}}
@endsection
   






