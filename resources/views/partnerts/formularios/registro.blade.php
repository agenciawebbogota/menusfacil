    <div class="row" style="padding:30px;">
      <div class="col l6 offset-l3 card" style="background-color:#fcf1e2;border-radius:6px">
        <p style="text-align:center;padding-top:20px;">Ingresa tus datos y recibirás toda la información en tu correo sobre como aplicar al programa</p>
        <form @submit.prevent="registrar()" style="padding:30px;">
          <div class="row">
            <div class="input-field col l8 offset-l2 m8 offset-m2 s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="nombre" type="text" v-model="partnert.nombre" required>
              <label for="nombre">Tu Nombre</label>
            </div>

            <div class="input-field col l8 offset-l2 m8 offset-m2 s12">
              <i class="material-icons prefix">email</i>
              <input id="correo" type="email" v-model="partnert.correo" required>
              <label for="correo">Tu Correo Electrónico</label>
            </div>

            {{-- <div class="input-field col l8 offset-l2 m8 offset-m2 s12">
              <i class="material-icons prefix">phone</i>
              <input id="telefono" type="number" v-model="partnert.telefono" required>
              <label for="telefono">Telefono</label>
            </div> --}}

            <div class="col l8 offset-l4 m8 offset-m5 s12 offset-s2">
              <button class="btn waves-effect waves-light" type="submit">¡QUIERO UNIRME!
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
