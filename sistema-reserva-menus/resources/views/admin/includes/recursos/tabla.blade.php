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

  <td> @{{ menu.nombre }} (@{{ menu.adicional}})</td>
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
      <a href="#actualizarMenu" class="btn-floating blue modal-trigger" v-on:click="llenarModal(menu)">
        <i class="mdi-editor-mode-edit">edit</i>
      </a>
  </td>
  <td>
    <a v-on:click.prevent="updateEstado(menu)" class="btn-floating red"><i class="mdi-action-delete">delete</i></a>
  </td>
</tr>
</tbody>
</table>
