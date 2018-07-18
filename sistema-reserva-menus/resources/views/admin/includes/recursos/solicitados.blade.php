<ul class="collection with-header" style="border:0px">
	<li class="lista-menus"><h4>Menus Solicitados</h4></li>
	<li class="lista-menus" v-for="(pedido, index) in pedidos" :key="pedido.id">@{{pedido.nombre}} ........ @{{pedido.nombre_pedido}}</li>
</ul>
