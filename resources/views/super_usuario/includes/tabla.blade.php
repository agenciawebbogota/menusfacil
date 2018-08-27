{{-- <div class="row">
  <div class="input-field col l8 s12 m6 offset-l2">
    <input type="search" name="buscador" placeholder="Buscar usuarios.." v-model="search" @keyup="buscador">
  </div>
</div> --}}
<table id="tablaMenus" class="centered">
<thead>
<tr>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Url</th>
    <th>Estado de la empresa</th>
    <th>¿Está Bloqueada?</th>
    <th>Día</th>
    <th colspan="4">Opciones</th>
</tr>
</thead>
  <tbody>
  <tr v-for="usuario in usuarios">
    <td>@{{ usuario.name }}</td>
    <td>@{{ usuario.email }}</td>
    <td>@{{ usuario.url }}</td>
    <td>@{{ usuario.estado_empresa }}</td>
    <td>@{{ usuario.bloqueado }}</td>
    <td>@{{ usuario.dias }}</td>
    <td>
      <a href="#actualizarUser" class="btn-floating blue modal-trigger" v-on:click="llenarModal(usuario)">
        <i class="material-icons" id="editaruser" data-step="3" data-intro="Editar Usuarios.">edit</i>
      </a>
    </td>
    {{-- <td>
      <a v-on:click.prevent="elimiarUsario(usuario)" data-step="4" id="eliminaruser" data-intro="Eliminar Usuarios." class="btn-floating red"><i class="material-icons">delete</i></a>
    </td> --}}
  </tr>
  </tbody>
</table>
