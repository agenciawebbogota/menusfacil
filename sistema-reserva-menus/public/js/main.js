// Inicialización Vue.js
new Vue({
	el: '#app',
	data:{
		menus:'',
		adicionales:'',
		terminaste:false,
		pedido:{
			menuPedido:'',
			adicionalPedido:'',
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
		this.notificacion()
		document.addEventListener('DOMContentLoaded', function() {
    		let adicionalSelect = M.FormSelect.init(document.querySelector('.adicionalSelect'), {});
    		let menuSelect = M.FormSelect.init(document.querySelector('.menuSelect'), {});
    		let slider = M.Carousel.init(document.querySelector('.carousel'), {fullWidth: false,indicators: false});
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
			}else if(!this.validarCorreo(this.pedido.correo)){
				this.noti.correo = 'Ingresa un correo valido.'
				this.noti.telefono = ''
				this.noti.nombre = ''
			}else{
				axios.post('/pedidos/crear',this.pedido)
				  .then((resp)=>{
				  	this.noti.correo = ''
					this.noti.telefono = ''
					this.noti.nombre = ''
					this.pedido.correo = ''
					this.pedido.telefono = ''
					this.pedido.nombre = ''
				  	M.toast({html: 'Hemos generado su orden', outDuration:1000});
				  	// this.notificación
				  })
				  .catch(function (error) {
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
		}
	}
})