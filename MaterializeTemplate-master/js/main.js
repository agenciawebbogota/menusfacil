// Inicialización Vue.js


new Vue({
	el: '#app',
	data:{
		menus:[
			{id: 1, nombre:'Sopa de pasta1', precio:12000, descripcion:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'},
			{id: 2, nombre:'Sopa de pasta2', precio:12000, descripcion:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'},
			{id: 3, nombre:'Sopa de pasta3', precio:12000, descripcion:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'},
			{id: 4, nombre:'Sopa de pasta4', precio:12000, descripcion:'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'},
		],
		adicionales:[
			{id: 1, nombre:'Porción de papas', precio:12000, descripcion:'Porción de papas'},
			{id: 2, nombre:'Patacones', precio:12000, descripcion:'Patacones'},
			{id: 3, nombre:'Guacamole', precio:12000, descripcion:'Guacamole'},
			{id: 4, nombre:'Anillos de cebolla', precio:12000, descripcion:'Anillos de cebolla'},
		],
		terminaste:false,
		pedido:{
			menusPedido:[],
			adicionalesPedido:[],
			nombre:'',
			correo:'',
			telefono:'',
		},
		noti:{
			nombre:'',
			correo:'',
			telefono:'',
		}
	},
	created:function(){
	},
	methods:{
		enviarPedido:function(){
			if (this.pedido.nombre.length < 4){
				this.noti.nombre = 'El nombre de ser igual o superior a 4 caracteres.'
			}else if(this.pedido.telefono.length < 6){
				this.noti.telefono = 'El telefono de ser  mayor a 5 caracteres.'
				this.noti.nombre = ''
			}else if(this.pedido.telefono.length > 10){
				this.noti.telefono = 'El telefono de ser menor a 11 caracteres.'
				this.noti.nombre = ''
			}else if(!this.validarCorreo(this.pedido.correo)){
				this.noti.correo = 'Ingresa un correo valido.'
				this.noti.telefono = ''
				this.noti.nombre = ''
			}else{
				console.log('enviar el menu')
				document.getElementById('pedido').reset()
				this.noti.correo = ''
				this.noti.telefono = ''
				this.noti.nombre = ''
			}
		},
		validarCorreo:function(texto) {
			emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
		    if (emailRegex.test(texto)) {
		      return true;
		    } else {
		      return false;
		    }	
		},
	}
})
$('.carousel.carousel-slider').carousel({
	fullWidth: true,
	indicators: true
});