


          <ul class="collection with-header" style="border:0px" v-model="pedidos">
            <li class="lista-menus"><h4>Menus Solicitados</h4></li>
            <li class="lista-menus" v-for="pedido in pedidos" >@{{pedido.nombre}} .............. @{{pedido.nombre_pedido}}</li>
          </ul>