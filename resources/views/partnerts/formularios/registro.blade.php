    <div class="row" style="padding:30px;">
      <div class="col l6 offset-l3 card">
        <form @submit.prevent="registrar()" style="padding:30px;">
          <div class="row">
            <div class="input-field col l8 offset-l2 m8 offset-m2">
              <i class="material-icons prefix">account_circle</i>
              <input id="nombre" type="text" v-model="partnert.nombre" required>
              <label for="nombre">Nombre</label>
            </div>

            <div class="input-field col l8 offset-l2 m8 offset-m2">
              <i class="material-icons prefix">email</i>
              <input id="correo" type="email" v-model="partnert.correo" required>
              <label for="correo">Correo</label>
            </div>

            <div class="input-field col l8 offset-l2 m8 offset-m2">
              <i class="material-icons prefix">phone</i>
              <input id="telefono" type="number" v-model="partnert.telefono" required>
              <label for="telefono">Telefono</label>
            </div>

            <div class="col l8 offset-l5 m8 offset-m5">
              <button class="btn waves-effect waves-light" type="submit">Enviar
              </button>
            </div>

          </div>
        </form>
      </div>
    </div>
