
<form v-on:submit.prevent="addMenu" id="addmenu" enctype="multipart/form-data">
	<div class="row">
		<div class="input-field col s12">
			<i class="mdi-editor-border-color prefix"></i>
			<input id="nombre" type="text" v-model="add.nombre" autocomplete="off">
			<span style="color:#c91e04">@{{ noti.nombre }}</span>
			<label for="nombre" data-error="" data-success="right">Nombre</label>
		</div>
		<div class="input-field col s12">
			<i class="mdi-content-filter-list prefix"></i>
			<textarea class="materialize-textarea" id="descripcion" v-model="add.descripcion" autocomplete="off"></textarea>
			<span style="color:#c91e04">@{{ noti.descripcion }}</span>
			<label for="descripcion">Descripción</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<i class="mdi-editor-attach-money prefix"></i>
			<input id="precio" type="text" v-model="add.precio" autocomplete="off">
			<span style="color:#c91e04">@{{ noti.precio }}</span>
			<label for="precio">Precio</label>
		</div>
	</div>
	@if (Auth::user()->estado_empresa == 'PAGA')
		
		<div class="row">
			<div class="input-field col s12">
				<i class="mdi-editor-attach-money prefix"></i>
				<input id="file" type="file" ref="file" @change="getImagen" multiple="true">
				<span style="color:#c91e04">@{{ noti.imagen }}</span>
				{{-- <label for="precio">Carga una imagen</label> --}}
			</div>
		</div>
	@endif

	<div class="row">
		<div id="input-switches1">
			<div class="col s12 m8 l9 section">
				{{-- <div > --}}
					<div class="switch">
						¿Es Adición? :
						<label>
						NO
						<input type="checkbox" v-model="add.adicional">
						<span class="lever"></span> SI
						</label>
					</div>
				{{-- </div> --}}
			</div>
		</div>

	</div>



	<div class="row">
		<div id="input-switches" class="section col s12 m8 l9">
			{{-- <div class=""> --}}
				<div class="switch">
					Disponible:
					<label>
					NO
					<input type="checkbox" v-model="add.estado">
					<span class="lever"></span> SI
					</label>
				</div>
			{{-- </div> --}}
		</div>
	</div>
	<div class="col s12 offset-s8">
		<button class="btn" type="submit" name="action">Guardar
			<i class="mdi-content-send right"></i>
		</button>
	</div>
</form>
