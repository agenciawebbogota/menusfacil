<div class="card" style="height:520px;background-color: {{Auth::user()->color1}}">
	<div class="card-image">
		<a href="{{url('/admin/ordenes')}}" target="_blank" class="btn-floating halfway-fab waves-effect waves-light tooltipped" data-position="button" data-tooltip="Ver ordenes" style="background-color:{{Auth::user()->color3}} !important;"><i class="fas fa-eye"></i></a>
		{{-- <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a> --}}
		<div class="card-content">
			<h2 class="titulo-pedidos">Ultimas Ordenes</h2>
			<p style="color:white;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;font-size:12px" class="lista-menus" v-model="pedidos" v-for="(pedido, index) in pedidos" v-if="index < 10">@{{pedido.nombre}} ha hecho un pedido, @{{momentjs(pedido.created_at)}}<em></em></p>
		</div>
	</div>
</div>