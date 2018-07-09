

<div id="actualizarMenu" class="modal modal-fixed-footer">
    <div class="modal-content">
    <h4 class="center-align">Nuevo producto</h4>
      <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">shopping_basket</i>
            <input id="nobre" type="text" class="validate" data-length="10">
            <label for="nobre">Nombre</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">attach_money</i>
            <input id="precio" type="tel" class="validate">
            <label for="precio">Precio</label>
          </div>
          <div class="input-field col s12">
              <i class="material-icons prefix">restaurant_menu</i>
              <textarea id="descripcion" class="materialize-textarea" data-length="120"></textarea>
              <label for="descripcion">Menu</label>
          </div>
        </div>
         <button class="btn waves-effect waves-light grey darken-4" type="submit" name="action">Guardar
      </button>
      </form>
    </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
    </div>
  </div>