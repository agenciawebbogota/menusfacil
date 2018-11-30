@extends('admin.layouts.admin')
@section('contenido')
<div class="row">
  <div class="col l8 s12">
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light" style="background-color:{{Auth::user()->color2}}">
          <h2 class="center-align titulo-tabla">TABLA DE MENÚS</h2>
          <a class="btn-floating btn-move-up waves-effect waves-light right tooltipped" data-position="bottom" data-tooltip="Crear Menú" style="margin: 10px"><i class="large material-icons activator">add</i></a>
          <a href="{{url('/descarga/menus')}}" target="_blank" style="margin: 10px" class="btn-floating btn-move-up waves-effect waves-light right tooltipped" data-position="bottom" data-tooltip="Ver PDF"><i class="material-icons">file_download</i></a>
      </div>
      <div class="card-content" style="overflow:scroll;height:450px;background: linear-gradient(#ffffff, #e5e5e5)">
        @include('admin.includes.recursos.tabla')
      </div>
      <div class="card-reveal container">
        <span class="card-title grey-text text-darken-4 center-align">Crear Nuevo Menú<i class="material-icons right">close</i></span>
        @include('admin.includes.formularios.agregarmenu')
      </div>
    </div>
  </div>
  {{-- <pre>@{{menus.estado}}</pre> --}}
  <div class="col l4 s12">
    @include('admin.includes.recursos.solicitados')
  </div>
</div>
  <div id="card-stats">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content white-text" style="background-color:{{Auth::user()->color2}}">
                    <p class="card-stats-title"><i class="mdi-social-group-add"></i> Menus Disponibles</p>
                    <h4 class="card-stats-number">@{{ total }}</h4>
                    <p class="card-stats-compare"><i class="material-icons tiny">access_time</i> <span class="green-text text-lighten-5">En tiempo real</span>
                    </p>
                </div>
                <div class="card-action darken-2" style="background-color:{{Auth::user()->color2}}">
                    <div id="clients-bar" class="center-align"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content lighten-1 white-text" style="background-color:{{Auth::user()->color3}}">
                    <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Ordenes Hoy</p>
                    <h4 class="card-stats-number" v-model="pedidos">@{{pedidos.length}}</h4>
                    <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i><span class="deep-purple-text text-lighten-5">@{{ fecha }}</span>
                    </p>
                </div>
                <div class="card-action darken-2" style="background-color:{{Auth::user()->color3}}">
                    <div id="invoice-line" class="center-align"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content white-text" style="background-color:{{Auth::user()->color2}}">
                    <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Vendido Hoy</p>
                    <h4 class="card-stats-number">$@{{ number_format(vendidosdia) }}</h4>
                    <p class="card-stats-compare"><i class="material-icons tiny">access_time</i> <span class="blue-grey-text text-lighten-5">En tiempo real</span>
                    </p>
                </div>
                <div class="card-action darken-2" style="background-color:{{Auth::user()->color2}}">
                    <div id="profit-tristate" class="center-align"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-content white-text" style="background-color:{{Auth::user()->color3}}">

                    {{-- <p class="card-stats-title"><i class="mdi-editor-attach-money"></i> Más Vendido Hoy</p>
                    <h4 class="card-stats-number">menú más vendido</h4>
                    {{-- <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span> --}}
                    <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Más vendido</p>
                    <h4 class="card-stats-number" style="font-size:25px;">@{{ masvendido }}</h4>
                    <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i>@{{cantidad_vendida}} <span class="purple-text text-lighten-5">Ventas</span>
                    </p>
                </div>
                <div class="card-action darken-2" style="background-color:{{Auth::user()->color3}}">
                    <div id="sales-compositebar" class="center-align"></div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Modal editar menu -->
  @include('admin.includes.formularios.editarmenu')
  {{-- expr --}}
@endsection
@section('script')
  <script type="text/javascript" src="/admin/js/app.min.js"></script>    
@endsection
