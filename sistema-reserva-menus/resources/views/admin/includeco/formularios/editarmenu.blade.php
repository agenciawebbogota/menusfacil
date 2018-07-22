<div id="actualizarMenu" class="modal modal-fixed-footer" >
    <div class="modal-content">
    <h4 class="center-align">Editar Menú</h4>
      <div class="row">
      <form class="col s12" @submit.prevent="updateMenu(update)">
        <div class="row">
          <div class="input-field col s6">
            <i class="mdi-action-add-shopping-cart small"></i>
            <input id="nobre" type="text" class="validate" data-length="10" v-model="update.nombre">
          </div>
          <div class="input-field col s6">
            <i class="mdi-editor-attach-money small"></i>
            <input id="precio" type="tel" class="validate" v-model="update.precio">
          </div>
          <div class="input-field col s12">
              <i class="mdi-maps-restaurant-menu small"></i>
              <textarea id="descripcion" class="materialize-textarea" data-length="120" v-model="update.descripcion"></textarea>
          </div>
          <div class="col s12 m8 l9">
            <div class="switch">
              Disponible :
              <label>
                NO
                <input type="checkbox" v-model="update.estado">
                <span class="lever"></span> SI
              </label>
            </div>
          </div>
        </div>
         <button class="btn waves-effect waves-light grey darken-4" type="submit">Guardar
      </button>
      </form>
    </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
    </div>
  </div>

  

  <!-- Modal Structure -->
  {{-- <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div> --}}