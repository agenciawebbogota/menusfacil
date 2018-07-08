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
			adicionalesPedido:[]

		}
	},
	created:function(){
	},
	methods:{
		// La idea es mostrar en tiempo real el menu
		// menusPedidos:function(menu){
		// 	console.log(menu)
		// },
		// adicionalesPedidos:function(menu){
		// 	// console.log(menu)
		// },

		enviarPedido:function(){

		},
	}
})
$('.carousel.carousel-slider').carousel({
	fullWidth: true,
	indicators: true
});