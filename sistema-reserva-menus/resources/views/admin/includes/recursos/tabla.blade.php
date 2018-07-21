<table id="tablaMenus" class="centered">
<thead style="background-color:#eaeaea">
<tr>
    <th style="border:1px solid #b3b3b3">Nombre</th>
    <th style="border:1px solid #b3b3b3">Descripción</th>
    <th style="border:1px solid #b3b3b3">Precio</th>
    <th style="border:1px solid #b3b3b3">Estado</th>
    <th style="border:1px solid #b3b3b3" colspan="4">Opciones</th>
</tr>
</thead>
  <tbody style="border:1px solid #b3b3b3">
  <tr v-for="menu in menus" v-if="menu.activo == 1">

    <td>@{{ menu.nombre }} (@{{ menu.adicional}})</td>
    <td>@{{ menu.descripcion }}</td>
    <td>@{{ menu.precio }}</td>
    <td>
      <div class="col s12 m8 l9">
        <div class="switch">
          <label>
            <input type="checkbox" v-model="menu.estado" value="menu.estado" checked="1" v-on:click="updateMenu(menu, 1)">
            <span class="lever" style="background-color:#eaeaea;border:1px solid #b3b3b3"></span>
          </label>
        </div>
      </div>
    </td>
    <td>
      <a class="waves-effect waves-light btn-floating blue modal-trigger" href="#modal1">
        
        <i class="mdi-editor-mode-edit"></i>

      </a>
        {{-- <a href="#actualizarMenu" class="btn-floating blue modal-trigger" v-on:click="llenarModal(menu)">
          
        </a> --}}
    </td>
    <td>
      <a v-on:click.prevent="updateEstado(menu)" class="btn-floating red"><i class="mdi-action-delete">delete</i></a>
    </td>
  </tr>
  </tbody>
</table>