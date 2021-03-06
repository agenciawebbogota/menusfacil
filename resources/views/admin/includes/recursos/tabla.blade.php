<table id="tablaMenus" class="centered">
<thead>
<tr>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Precio</th>
    <th>Estado</th>
    <th colspan="4">Opciones</th>
</tr>
</thead>
  <tbody>
  <tr v-for="menu in menus" v-if="menu.activo == 1">

    <td>@{{ menu.nombre }}</td>
    <td>@{{ menu.descripcion }}</td>
    <td>$ @{{ new Intl.NumberFormat().format(menu.precio) }}</td>
    <td>
      <div class="col s12 m8 l9">
        <div class="switch">
          <label>
            <input type="checkbox" v-model="menu.estado" v-on:click="updateMenu(menu, 1)">
            <span class="lever" style="background-color:{{Auth::user()->color3}}"></span>
          </label>
        </div>
      </div>
    </td>
    <td>
      <a href="#actualizarMenu" class="btn-floating blue modal-trigger" v-on:click="llenarModal(menu)">
        <i class="material-icons">edit</i>
      </a>
    </td>
    <td>
      <a v-on:click.prevent="updateEstado(menu)" class="btn-floating red"><i class="material-icons">delete</i></a>
    </td>
  </tr>
  </tbody>
</table>
