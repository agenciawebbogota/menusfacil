<div class="card" style="height:520px;background-color: {{Auth::user()->color1}}">
	<div class="card-image">
		<a href="{{url('/descarga/pedidos')}}" target="_blank" class="btn-floating halfway-fab waves-effect waves-light tooltipped" data-position="button" data-tooltip="Ver o imprimir pedidos" style="background-color:{{Auth::user()->color3}} !important;"><i class="material-icons">file_download</i></a>
		{{-- <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a> --}}
		<div class="card-content">
			<h2 class="titulo-pedidos">Ultimas Ordenes</h2>
			<p style="color: white;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;" class="lista-menus" v-model="pedidos" v-for="(pedido, index) in pedidos" v-if="index < 10">@{{momentjs(pedido.created_at)}}, @{{pedido.nombre_pedido}}, @{{pedido.nombre}}<em></em></p>
		</div>
	</div>
</div>
