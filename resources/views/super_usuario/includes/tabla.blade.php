<section class="container">
  <table id="tablaMenus" class="centered">
  <thead>
  <tr>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Url</th>
      <th>Estado de la empresa</th>
      <th>¿Está Bloqueada?</th>
      <th>Día</th>
      <th>Ordenes</th>
      <th colspan="4">Opciones</th>
  </tr>
  </thead>
    <tbody>
    <tr v-for="(usuario, index) in usuarios">
      <td>@{{ usuario.name }}</td>
      <td>@{{ usuario.email }}</td>
      <td>@{{ usuario.url }}</td>
      <td>@{{ usuario.estado_empresa }}</td>
      <td>@{{ usuario.bloqueado }}</td>
      <td>@{{ usuario.dias }}</td>
      <td>@{{  (14 - usuario.dias) * 5 }}</td>
      <td>
        <a href="#actualizarUser" class="btn-floating blue modal-trigger" v-on:click="llenarModal(usuario)">
          <i class="material-icons" id="editaruser" data-step="3" data-intro="Editar Usuarios.">edit</i>
        </a>
      </td>
    </tr>
    </tbody>
  </table>
</section>
