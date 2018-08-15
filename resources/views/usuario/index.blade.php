<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	@foreach ($empresa as $el)
		<title>{{$el->name}} | Menús Fácil</title>
	@endforeach
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/inicio/css/app.css">
	<link rel="stylesheet" href="/inicio/css/usuario.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
	<div id="app" v-cloak>

		<div class="navbar-fixed">
			<nav>
		    <div class="nav-wrapper">
					<a class="brand-logo center">
						<img src="/admin/img/logo-menusfacil.svg" alt="Menus Facil Logo" width="100px" class="imagen-logo">
					</a>
		    </div>
		  </nav>
		</div>
		<div style="position: relative;padding-top:30px;">
		</div>
		<form @submit.prevent="enviarPedido()" id="pedido">

			<div class="row">
				<div class="col l8 s12 m10 offset-l2 offset-m1">
					<div class="carousel carousel-slider center">



						@foreach ($menus as $menu)
						@if ($menu->adicional == 'NO' AND $menu->estado == 1)
								<div class="carousel-item  white-text"  href="#two!" style="background:gray;">

							  </div>
						@endif
						@endforeach



					</div>
				</div>
			</div>

			<div class="row">
					<div class="col s12 m6">
						<div class="card">
							<div class="card-image">
								<img src="/img/menu.img-1.jpg">
								<span class="card-title">SED PORTITOIR</span>
								<a class="btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="left" data-tooltip="Pide uno"><i class="material-icons">add</i></a>
							</div>
							<div class="card-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus dui, tincidunt eget dolor in, porta egestas mauris. Curabitur ac urna congue, consequat purus faucibus, sodales orci.</p>
							</div>
						</div>
					</div>
			</div>

			{{-- Mi selección --}}
			<div class="container">
				<div class="row">
					<div class="col12 s12 m6">
						<div class="card blue-grey" style="border-radius:10px">
	        			<div class="card-content white-text mi-seleccion">
	          				<span class="card-title">MI SELECCIÓN</span>
	        			</div>
									<table class="striped">
					         <tbody>
					          <tr>
					            <td class="content">SED PORTITOIR</td>
											<td class="content delete"><i class="material-icons">close</i></td>
					          </tr>
					          <tr>
					            <td class="content">SED PORTITOIR</td>
											<td class="content delete"><i class="material-icons">close</i></td>
					          </tr>
					          <tr>
					            <td class="content">SED PORTITOIR</td>
											<td class="content delete"><i class="material-icons">close</i></td>
					          </tr>
					        </tbody>
					      </table>
							</div>
					</div>
					<a class="waves-effect waves-light btn-large confirmar">Confirmar Pedido</a>
				</div>
			<div>
			</div>
			<div class="container">
				<div class="row">
			        <div class="input-field col l8 s12 m8 offset-m2 offset-l2 ">
			          <i class="material-icons prefix">account_circle</i>
			          <input id="nombre" type="text" autocomplete="off" v-model="pedido.nombre">
			          <span v-if="noti.nombre" class="red-text text-darken-2">@{{noti.nombre}}</span>
			          <label for="nombre">Tu Nombre</label>
			        </div>
			        <div class="input-field col l8 s12 m8 offset-m2 offset-l2">
			          <i class="material-icons prefix">phone</i>
			          <input id="telefono" type="number" v-model="pedido.telefono">
			          <span v-if="noti.telefono" class="red-text text-darken-2">@{{noti.telefono}}</span>
			          <label for="telefono">Tu Teléfono</label>
			        </div>
							<div class="input-field col l8 s12 m8 offset-l2 m8 offset-m2">
			          <i class="material-icons prefix">edit_location</i>
			          <input id="direccion" type="text" v-model="pedido.direccion"  autocomplete="off">
			          <span v-if="noti.direccion" class="red-text text-darken-2">@{{noti.direccion}}</span>
			          <label for="direccion">Dirección donde deseas recibir tu pedido</label>
			        </div>
							<div class="input-field col l8 s12 m8 offset-m2 offset-l2">
			          <i class="material-icons prefix">announcement</i>
			          <input id="observaciones" type="text" v-model="pedido.observaciones"  autocomplete="off">
			          <span v-if="noti.observaciones" class="red-text text-darken-2">@{{noti.observaciones}}</span>
			          <label for="observaciones">¿Tienes alguna observación acerca de tu pedido? (Ej: con poca sal)</label>
			        </div>
				      @foreach ($empresa as $el)
				      	<p style="color:white" id="user_id">{{ $el->id }}</p>
				      	{{-- <input id="user_id" type="text" v-model="pedido.user_id" value="{{ $el->id }}"> --}}
				      @endforeach
						 {{-- @csrf --}}
						 {{-- poner swich para habilitar y deshabilitar el correo --}}
						 <div class="input-field col l8 s12 m8 offset-l2 m8 offset-m2" v-if="checked">
							 <i class="material-icons prefix">email</i>
							 <input id="correo" type="text" v-model="pedido.correo"  autocomplete="off">
							 <span v-if="noti.correo" class="red-text text-darken-2">@{{noti.correo}}</span>
							 <label for="correo">Correo</label>
						 </div>
						 {{-- <div class=""> --}}
						 <br><br>
						 <label class="col l8 s12 m8 offset-l2 m8 offset-m2">
							 <input type="checkbox" v-model="checked"/>
							 <span>¿Quieres recibir los detalles de tu orden en tu email?</span>
						 </label>
						 {{-- </div> --}}
						 @foreach ($empresa as $el)
							 <button style="background:{{$el->color1}};"
								 v-if="(pedido.menu_pedido.length >0) && (pedido.nombre.length >0 && pedido.telefono.length >0 && pedido.direccion.length>0 )" class="btn waves-effect col l6 s10 offset-l3 offset-s1" type="submit">Hacer pedido</button>
						 @endforeach
					<button v-else class="btn waves-effect col l6 s10 offset-l3 offset-s1 disabled" type="submit">Llena todos los campos</button>
			      </div>
			</div>

		</form>
	</div>
</body>
	<!-- Compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://www.gstatic.com/firebasejs/5.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.0/firebase-database.js"></script>
	<script type="text/javascript" src="/inicio/js/app.js"></script>
</html>
