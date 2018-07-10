


<table id="tablaMenus" class="centered">
<thead>
<tr>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Precio</th>
    <th>Estado</th>
    <th colspan="4">Opciones</th>
    {{-- <th>Opciones 2</th> --}}
</tr>
</thead>
<tbody>
<tr v-for="menu in menus" v-if="menu.activo == 1">

  <td> @{{ menu.nombre }} </td>
  <td>@{{ menu.descripcion }}</td>
  <td>@{{ menu.precio }}</td>
  <td>
    <div class="col s12 m8 l9">
      <div class="switch">
        <label>
          <input type="checkbox" v-model="menu.estado" value="menu.estado" checked="1" v-on:click="updateMenu(menu, 1)">
          <span class="lever"></span>
        </label>
      </div>
    </div>
  </td>
  <td>
      <a href="#actualizarMenu" class="btn-floating blue modal-trigger"><i class="large material-icons" v-on:click.prevent="llenarModal(menu)">edit</i></a>
  </td>
  <td>
    <a v-on:click.prevent="updateEstado(menu)" class="btn-floating red"><i class="large material-icons">delete</i></a>
  </td>
</tr>
</tbody>
</table>
{{-- <div class="col-md-12 center text-center">
  <span class="left" id="total_reg"></span>
  <ul class="pagination pager" id="myPager"></ul>
</div> --}}
