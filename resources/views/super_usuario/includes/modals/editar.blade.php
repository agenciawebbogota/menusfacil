<div id="actualizarUser" class="modal modal-fixed-footer" >
    <div class="modal-content">
    <h4 class="center-align">Editar Usiario</h4>
      <div class="row">
      <form class="col s12" @submit.prevent="actualizarUser()">
        <div class="row">
          <div class="input-field col s12 m6">
            Nombre
            <input id="nombre" type="text" class="validate" data-length="10" v-model="update.name">
          </div>
          <div class="input-field col s12 m6">
            Correo
            <input id="email" type="text" class="validate" v-model="update.email" disabled>
          </div>
          <div class="input-field col s12 m6">
            URL
            <input id="url" type="text" class="validate" data-length="10" v-model="update.url">
          </div>
          <div class="input-field col s12 m6">
            URL
            <input id="url" type="text" class="validate" data-length="10" v-model="update.url">
          </div>
          <div class="input-field col s12 m6">
            Estado de empresa (GRATIS O PAGO)
            <input id="estado" type="text" class="validate" data-length="10" v-model="update.estado_empresa">
          </div>
          <div class="input-field col s12 m6">
            bloqueado (SI O NO)
            <input id="bloqueado" type="text" class="validate" data-length="10" v-model="update.bloqueado">
          </div>
          <div class="input-field col s12 m6">
            Días de servicio
            <input id="dias" type="text" class="validate" data-length="10" v-model="update.dias" disabled>
          </div>
          <div class="input-field col s12 m6">
            Creado el
            <input id="creado" type="text" class="validate" data-length="10" v-model="update.created_at">
          </div>
          <div class="input-field col s12 m6">
            Color 1
            <input id="color1" type="text" class="validate" data-length="10" v-model="update.color1">
            <spam :style="{color:update.color1}">Muestra de color</spam>
          </div>
          <div class="input-field col s12 m6">
            Color 2
            <input id="color2" type="text" class="validate" data-length="10" v-model="update.color2">
            <spam :style="{color:update.color2}">Muestra de color</spam>
          </div>
          <div class="input-field col s12 m6">
            Color 3
            <input id="color3" type="text" class="validate" data-length="10" v-model="update.color3">
            <spam :style="{color:update.color3}">Muestra de color</spam>
          </div>

        </div>
        <button class="btn waves-effect waves-light grey darken-4" type="submit">Actualizar
      </button>
    </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Salir</a>
    </div>
  </div>
