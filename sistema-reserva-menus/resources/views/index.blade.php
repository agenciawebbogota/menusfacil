<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>MenusFácil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
    <link rel="stylesheet" href="css2/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body>
	<div id="app">

		{{-- <div class="navbar-fixed">
			<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo center">APP</a>
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
						    <div class="carousel-item grey lighten-5 black-text"  href="#two!">
						      <div class="row">
						      	<div class="col s12 l8 offset-l2 card" style="background: linear-gradient(#ee771a, #ee771a, #f5cf6e);">
						      		<div class="card-title">
						      			<h4>Menu 1</h4>
						      		</div>
						      		<div class="card-content" style="text-align: justify;">
						      			<h5>{{ $menu->nombre}}</h5>
						      			<i class="material-icons tiny">person</i> Descripción
						      			<p>{{ $menu->descripcion}}</p>
						      			<p>
						      				<i class="material-icons tiny">attach_money</i>{{ $menu->precio}}
						      			</p>
						      		</div>
						      	</div>
						      </div>
						    </div>
						@endif
						@endforeach
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col l6 s12 m8 offset-m2 hoverable">
						<ul class="collection with-header">
					        <li class="collection-header yellow">
					        	<h4>Mi selección</h4>
					        	<p>Selecciona ti pedido</p>
					        </li>
					        <div class="input-field col s12">
							    <select class="menuSelect" v-model="pedido.menuPedido">
							      <option value="" disabled selected>Toma uno</option>
								    @foreach ($menus as $menu)
									@if ($menu->adicional == 'NO' AND $menu->estado == 1)
							      		<option value="{{$menu->id}}">{{ $menu->nombre }}</option>
									@endif
									@endforeach
							    </select>
							    <label>Menus del día</label>
						  	</div>
					    </ul>
					</div>
					<div class="col l6 s12 m8 offset-m2 hoverable">
						<ul class="collection with-header">
					        <li class="collection-header red">
					        	<h4>Adiciones</h4>
					        	<p>Selecciona algo adicional</p>
					        </li>
					        <div class="input-field col s12">
							    <select class="adicionalSelect" v-model="pedido.adicionalPedido">
							      <option value="" disabled selected>Toma uno</option>
									@foreach ($menus as $menu)
									@if ($menu->adicional == 'SI' AND $menu->estado == 1)
							      		<option value="{{$menu->id}}">{{ $menu->nombre }}</option>
									@endif
									@endforeach
							    </select>
							    <label>Adicionales del día</label>
						  	</div>
					    </ul>
					</div>
				</div>
			</div>
			<div>
			</div>
			<div class="container">
				<div class="row">
			        <div class="input-field col l8 s12 m8 offset-m2 offset-l2 ">
			          <i class="material-icons prefix">account_circle</i>
			          <input id="nombre" type="text" autocomplete="off" v-model="pedido.nombre">
			          <span v-if="noti.nombre" class="red-text text-darken-2">@{{noti.nombre}}</span>
			          <label for="nombre">Nombre</label>
			        </div>
			        <div class="input-field col l8 s12 m8 offset-m2 offset-l2">
			          <i class="material-icons prefix">phone</i>
			          <input id="telefono" type="number" v-model="pedido.telefono">
			          <span v-if="noti.telefono" class="red-text text-darken-2">@{{noti.telefono}}</span>
			          <label for="telefono">Teléfono</label>
			        </div>
			        <div class="input-field col l8 s12 m8 offset-l2 m8 offset-m2">
			          <i class="material-icons prefix">email</i>
			          <input id="correo" type="text" v-model="pedido.correo"  autocomplete="off">
			          <span v-if="noti.correo" class="red-text text-darken-2">@{{noti.correo}}</span>
			          <label for="correo">Correo</label>
			        </div>
					<div class="input-field col l8 s12 m8 offset-l2 m8 offset-m2">
			          <i class="material-icons prefix">edit_location</i>
			          <input id="direccion" type="text" v-model="pedido.direccion"  autocomplete="off">
			          <span v-if="noti.direccion" class="red-text text-darken-2">@{{noti.direccion}}</span>
			          <label for="direccion">Dirección</label>
			        </div>
							<div class="input-field col l8 s12 m8 offset-m2 offset-l2">
			          <i class="material-icons prefix">announcement</i>
			          <input id="observaciones" type="text" v-model="pedido.observaciones"  autocomplete="off">
			          <span v-if="noti.observaciones" class="red-text text-darken-2">@{{noti.observaciones}}</span>
			          <label for="observaciones">Observaciones</label>
			        </div>

					<button
					v-if="(pedido.menuPedido.length >0) && (pedido.nombre.length >0 && pedido.telefono.length >0 && pedido.correo.length>0 && pedido.direccion.length>0 && pedido.observaciones.length>0)" class="btn waves-effect green col l6 s10 offset-l3 offset-s1" type="submit">Hacer pedido</button>
					<button v-else class="btn waves-effect green col l6 s10 offset-l3 offset-s1 disabled" type="submit">Llena todos los campos</button>
			      </div>
			</div>

		</form> --}}

		<div class="container">
			<div class="card">
				<div class="card-content">

					<ul class="collection">
				      <li class="collection-item"><a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a></li>
				      <li class="collection-item"><a class="nav-link" href="{{ route('register') }}">Regitrarme</a></li>
				    </ul>
				</div>
			</div>
			
		</div>

	</div>
</body> 
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
  <script type="text/javascript" src="js/config.js"></script>
  <script type="text/javascript" src="usuario/js/axios.min.js"></script>
    <script src="js2/materialize.min.js"></script>
    <script type="text/javascript" src="usuario/js/vue.js"></script>
    <script type="text/javascript" src="usuario/js/main.js"></script>
</html>