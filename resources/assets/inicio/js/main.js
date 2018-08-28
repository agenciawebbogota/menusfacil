// Inicialización Vue.js
new Vue({
	el: '#app',
	data:{
		menus:'',
		adicionales:'',
		checked:false,
		terminaste:false,
		detalle:[],
		pedido:{
			menu_pedido:[],
			nombre:'',
			correo:'',
			telefono:'',
			direccion:'',
			user_id:'',
			observaciones:'',
			total:0
		},
		noti:{
			nombre:'',
			correo:'',
			telefono:'',
			direccion:'',
			observaciones:''
		}
	},
	created:function(){
		this.pedido.user_id = document.getElementById('user_id').innerHTML
		document.addEventListener('DOMContentLoaded', function() {
    		let adicionalSelect = M.FormSelect.init(document.querySelector('.adicionalSelect'), {});
    		let menuSelect = M.FormSelect.init(document.querySelector('.menuSelect'), {});
    		let slider = M.Carousel.init(document.querySelector('.carousel'), {fullWidth: false,indicators: true});
    		let instances = M.Tooltip.init(document.querySelectorAll('.tooltipped'), {});
		});
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
			}else if(this.pedido.direccion.length<4){
				this.noti.direccion = 'Debe escribir una dirección valida.'
				this.noti.nombre = ''
				this.noti.telefono = ''
				this.noti.correo = ''
			}else if(this.pedido.correo.length > 0){
					if (!this.validarCorreo(this.pedido.correo)) {
						this.noti.correo = 'Ingresa un correo valido.'
						this.noti.telefono = ''
						this.noti.nombre = ''
					}else {
					// let self = this;
						axios.post('/pedidos/crear',this.pedido)
							.then((resp)=>{
								this.notificacion()
								this.noti.correo = ''
								this.noti.telefono = ''
								this.noti.nombre = ''
								this.pedido.correo = ''
								this.pedido.telefono = ''
								this.pedido.nombre = ''
								this.noti.direccion = ''
								this.noti.observaciones = ''
								this.pedido.direccion = ''
								this.pedido.observaciones = ''
								this.terminaste = false
								this.detalle = []
								this.pedido.total = 0
								M.toast({html: 'Hemos generado su orden', outDuration:1000});


							})
							.catch(function (error) {
								M.toast({html: 'Hay un pequeño error en el servidor', outDuration:1000});
								// console.log(error);
							});
					}
				}else {
					axios.post('/pedidos/crear',this.pedido)
						.then((resp)=>{
							this.notificacion()
							this.noti.correo = ''
							this.noti.telefono = ''
							this.noti.nombre = ''
							this.pedido.correo = ''
							this.pedido.telefono = ''
							this.pedido.nombre = ''
							this.noti.direccion = ''
							this.noti.observaciones = ''
							this.pedido.direccion = ''
							this.pedido.observaciones = ''
							this.pedido.menu_pedido = []
							this.detalle = []
							this.pedido.total = 0
							this.terminaste = false
							M.toast({html: 'Hemos generado su orden', outDuration:1000});
						})
						.catch(function (error) {
							console.log(error);
							M.toast({html: 'Hay un pequeño error en el servidor', outDuration:1000});
						});
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
		notificacion:function(){
			ref.set({
				nuevoPedido:Math.random()
			});
		},
		agregarPedido:function(menu){
			this.pedido.menu_pedido.unshift(menu.id)
			this.detalle.unshift(menu)
			this.pedido.total += parseFloat(menu.precio)
			M.toast({html: 'Menú agregado', outDuration:1000});
		},
		eliminarMenu(index, precio){
			this.pedido.menu_pedido.splice(index, 1)
			this.detalle.splice(index, 1)
			this.pedido.total -= parseFloat(precio)
			M.toast({html: 'Menú eliminado', outDuration:1000});
		}
	}
})
