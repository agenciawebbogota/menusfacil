<div class="card" style="height:430px;background-color: {{Auth::user()->color1}}">
	<div class="card-image">
		<a href="/descarga/pedidos" target="_blank" class="btn-floating halfway-fab waves-effect waves-light tooltipped" data-position="button" data-tooltip="Ver o imprimir pedidos" style="background-color:{{Auth::user()->color3}} !important;"><i class="material-icons">file_download</i></a>
		{{-- <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a> --}}
		<div class="card-content">
			<h2 class="titulo-pedidos">Ultimas Ordenes</h2>
			<p style="color: white" class="lista-menus" v-model="pedidos" v-for="(pedido, index) in pedidos" v-if="index < 10">@{{pedido.nombre}} ... @{{pedido.nombre_pedido}} ... <em>@{{momentjs(pedido.created_at)}}</em></p>
		</div>
	</div>
</div>
