

<div class="card tabla-menus-solicitados" style="height:450px">
    <div class="card-move-up waves-block waves-light">
        <div class="move-up">
          <ul class="collection with-header" style="border:0px" v-model="pedidos">
            <li class="lista-menus"><h4>Menus Solicitados</h4></li>
            <li class="lista-menus" v-for="pedido in pedidos" >@{{pedido.nombre}} .............. @{{pedido.nombre_pedido}}</li>
          </ul>
        </div>
    </div>
    <div class="card-content">
      <a href="/descarga/pedidos" target="_blank" class="btn-floating btn-move-up waves-effect waves-light darken-2 center tooltipped" data-position="right" data-tooltip="Ver o Imprimir Pedidos"><i class="large material-icons activator">add</i></a>
    </div>
</div>
