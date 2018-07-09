@extends('admin.layouts.admin')
@section('contenido')
<div class="row">
  <div class="col l8 s12">
    <div class="card" style="overflow:scroll;height:450px">
      <div class="card-image red waves-effect waves-block waves-light">
          {{-- <h5 class="center-align">Tabla de menus creados</h5> --}}
          <p></p>
          <a class="btn-floating btn-move-up waves-effect waves-light right" style="margin: 10px"><i class="large material-icons activator">add</i></a>
          <a href="/descarga/menusCreados" target="_blanck" style="margin: 10px" class="btn-floating btn-move-up waves-effect waves-light right"><i class="large material-icons">file_download</i></a>
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
  {{-- <pre>@{{menus.estado}}</pre> --}}
  <div class="col l4 s12">
    @include('admin.includes.recursos.solicitados')
  </div>
</div>
          <div class="row">
              <div class="col s12 m6 l3">
                  <div class="card">
                      <div class="card-content pink lighten-1 white-text">
                          <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Menus creados</p>
                          <h4 class="card-stats-number">@{{ total }}</h4>
                          <p class="card-stats-compare"><i class="material-icons tiny">restaurant_menu</i> <span class="deep-purple-text text-lighten-5">Algo más</span>
                          </p>
                      </div>
                      {{-- <div class="card-action  pink darken-2">
                          <div id="invoice-line" class="center-align"></div>
                      </div> --}}
                  </div>
              </div>
              <div class="col s12 m6 l3">
                  <div class="card">
                      <div class="card-content  green white-text">
                          <p class="card-stats-title"><i class="mdi-social-group-add"></i> Menus solicitados hoy</p>
                          <h4 class="card-stats-number">566</h4>
                          <p class="card-stats-compare"><i class="material-icons tiny">timer</i> <span class="green-text text-lighten-5">@{{ fecha }}</span>
                          </p>
                      </div>
                      {{-- <div class="card-action  green darken-2">
                          <div id="clients-bar" class="center-align"></div>
                      </div> --}}

                  </div>
              </div>
              <div class="col s12 m6 l3">
                  <div class="card">
                      <div class="card-content blue-grey white-text">
                          <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                          <h4 class="card-stats-number">$806.52</h4>
                          <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                          </p>
                      </div>
                      {{-- <div class="card-action blue-grey darken-2">
                          <div id="profit-tristate" class="center-align"></div>
                      </div> --}}
                  </div>
              </div>
              <div class="col s12 m6 l3">
                  <div class="card">
                      <div class="card-content purple white-text">
                          <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                          <h4 class="card-stats-number">$8990.63</h4>
                          <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                          </p>
                      </div>
                      {{-- <div class="card-action purple darken-2">
                          <div id="sales-compositebar" class="center-align"></div>
                      </div> --}}
                  </div>
              </div>
          </div>













  <!-- Modal editar menu -->
  @include('admin.includes.formularios.editarmenu')
  {{-- expr --}}
@endsection
   






