@extends('admin/layouts.admin')

@section('contenido')
  <!-- PRINCIPAL -->
    {{-- <div id="main"> --}}
        <!-- INCIO WRAPPER -->
        {{-- <div class="wrapper"> --}}

            <!-- INICIO MENU IZQUIERDA-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn">{{ Auth::user()->name }}</a>
                            <p class="user-roal">Administrador</p>
                        </div>
                    </li>
                    <div class="col col s8 m8 l8">
                        <ul class="ajustes-menu">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a>
                            </li>
                            <li><a href="#"><i class="mdi-action-settings"></i> Ajustes</a>
                            </li>
                            <li><a href="#"><i class="mdi-communication-live-help"></i> Ayuda</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi-hardware-keyboard-tab"></i> Salir</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                            </li>
                        </ul>
                    </div>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light yellow"><i class="mdi-navigation-menu" style="color:red"></i></a>
            </aside>
            <!-- FIN MENU IZQUIERDA-->

            <!-- INCIO CONTENIDO -->
            <section id="content">

                <!--contenedor-->
                <div class="container" style="padding-top:32px;padding-bottom:32px">

                  <!--chart dashboard start-->
                  <div id="chart-dashboard">
                      <div class="row">
                          <div class="col s12 m12 l8">
                              <div class="card">
                                  <div class="card-move-up waves-effect waves-block waves-light">
                                      <div class="move-up cyan darken-1">
                                        <p></p>
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                      </div>
                                  </div>
                                  <div class="card-content">
                                    <!-- Inicio Tabla de Menús -->
                                    <div style="overflow:scroll;height:350px">
                                      <div class="col s12 m12 l12">
                                          <!-- <div id="jsGrid-basic"></div> -->
                                        <table id="tablaMenus">
                                          <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Precio</th>
                                                <th>Estado</th>
                                                <th>Opciones</th>
                                                {{-- <th>Opciones 2</th> --}}
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr v-for="menu in menus" v-if="menu.activo == 1">

                                              <td> @{{ menu.nombre }} </td>
                                              <td>@{{ menu.descripcion }}</td>
                                              <td>@{{ menu.precio }}</td>
                                              <td>
                                                  <span v-if="menu.estado > 0">PUBLICADO</span>
                                                  <span v-else>NO PUBLICADO</span>
                                              </td>
                                                {{-- <a href="#"><i class="mdi-action-delete small"></i></a> --}}
                                              <td>
                                                  <a href="#!" class="btn-floating blue"><i class="large mdi-action-done"></i></a>
                                              </td>                                              
                                              <td>
                                                <a v-on:click.prevent="updateEstado(menu)" class="btn-floating red"><i class="large mdi-action-delete"></i></a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <div class="col-md-12 center text-center">
                                          <span class="left" id="total_reg"></span>
                                          <ul class="pagination pager" id="myPager"></ul>
                                        </div>
                                    <!-- Fin Tabla de Menús -->

                                      </div>

                                    </div>
                                  </div>
                                  
                                  <!-- Formulario -->
                                  <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Crear Nuevo Menu <i class="mdi-navigation-close right"></i></span>
                                      <div id="input-fields">
                                        <div class="row">
                                          <div class="col s12 m8 l9">
                                            <div class="row">
                                              {{-- Formulario para agregar menus --}}
                                              @include('admin.includes.formularios.agregarmenu')
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      
                                  </div>

                              </div>
                          </div>
                                  
                          <div class="col s12 m12 l4">
                              {{-- Card de menus solicitados --}}
                              @include('admin.includes.recursos.solicitados')
                          </div>
                      </div>
                  </div>
                  <!--chart dashboard end-->

                  <!-- //////////////////////////////////////////////////////////////////////////// -->

                  <!--card stats start-->
                  <div id="card-stats">
                      <div class="row">
                          <div class="col s12 m6 l3">
                              <div class="card">
                                  <div class="card-content  green white-text">
                                      <p class="card-stats-title"><i class="mdi-social-group-add"></i> Menus creados</p>
                                      <h4 class="card-stats-number">150</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                      </p>
                                  </div>
                                  <div class="card-action  green darken-2">
                                      <div id="clients-bar" class="center-align"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col s12 m6 l3">
                              <div class="card">
                                  <div class="card-content pink lighten-1 white-text">
                                      <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Menus creados</p>
                                      <h4 class="card-stats-number" v-model="total">@{{ total }}</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                      </p>
                                  </div>
                                  <div class="card-action  pink darken-2">
                                      <div id="invoice-line" class="center-align"></div>
                                  </div>
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
                                  <div class="card-action blue-grey darken-2">
                                      <div id="profit-tristate" class="center-align"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col s12 m6 l3">
                              <div class="card">
                                  <div class="card-content purple white-text">
                                      <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                                      <h4 class="card-stats-number">150</h4>
                                      <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                      </p>
                                      {{-- <a href="#editar" class="btn-floating blue modal-trigger tooltipped" data-position="left" data-tooltip="Nuevo Menú"><i class="large mdi-action-assignment"></i></a> --}}
                                  </div>
                                  <div class="card-action purple darken-2">
                                      <div id="sales-compositebar" class="center-align"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--card stats end-->

                  {{-- Modal del formulario --}}

                          @include('admin.includes.formularios.editarmenu')


                      <!--Fin Modal-->

                    <!-- Boton flotante derecha -->
                    <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                        <a class="btn-floating btn-large">
                          <i class="mdi-content-add"></i>
                        </a>
                        <ul>
                          <!-- <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li> -->
                          <li><a href="/descarga/menusCreados" class="btn-floating yellow darken-1 tooltipped" target="_black" data-position="left" data-tooltip="Descargar PDF"><i class="large mdi-file-file-download"></i></a></li>
                          <li><a href="#!" class="btn-floating green tooltipped" data-position="left" data-tooltip="Historico Menús"><i class="large mdi-editor-insert-invitation"></i></a></li>
                          {{-- <li><a href="#editar" class="btn-floating blue modal-trigger tooltipped" data-position="left" data-tooltip="Nuevo Menú"><i class="large mdi-action-assignment"></i></a></li> --}}
                        </ul>
                    </div>
                    <!-- Boton flotante derecha -->

                </div>
                <!--fin contenedor-->
            </section>
            <!-- FIN CONTENIDO -->
        {{-- </div> --}}
        <!-- FIN WRAPPER -->

    {{-- </div> --}}
    <!-- FIN PRINCIPAL -->
@endsection