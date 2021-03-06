new Vue({
	el:'#dash',
	data:{
		vendidosdia:'',
		menus:[],
		total:0,
		fecha:'',
		estado:'',
		pedidos:[],
		add:{
			nombre:'',
			descripcion:'',
			precio:'',
			adicional:'',
			estado:1
		},
		update:{
			nombre:'',
			descripcion:'',
			precio:'',
			estado:'',
			adicional:'',
		},
		noti:{
			nombre:'',
			descripcion:'',
			precio:'',
		}
	},
	mounted:function(){
		document.addEventListener('DOMContentLoaded', ()=> {
			// Botones flotantes
			let fixedActionBtn = M.FloatingActionButton.init(document.querySelectorAll('.fixed-action-btn'), {});
			let actualizarMenu = M.Modal.init(document.querySelectorAll('#actualizarMenu'), {dismissible:false});
			let tooltip = M.Tooltip.init(document.querySelectorAll('.tooltipped'), {});
			let sidenav = M.Sidenav.init(document.querySelectorAll('.sidenav'), {});
		})
	},
	created:function(){

		ref.on('value', (data) => {
		  this.getPedidos()
		});
		this.getMenus()
		moment.locale('es');
		this.fecha = moment().format('LL');
	},
	methods:{
		getMenus:function(){
			axios.get('/menus/get')
			  .then((response) =>{
			    this.menus = response.data.menus
			    this.total = response.data.total
			  })
			  .catch(function (error) {
			    M.toast({
						html:'Hay un error en el servidor, contactanos.',
						outDuration:1000
					});
					console.log(error);
			  })
		},
		addMenu:function(){
			if(this.add.adicional){
				this.add.adicional = 'SI'
			}else{
				this.add.adicional = 'NO'
			}if(this.add.nombre.length < 4){
				this.noti.nombre = 'El nombre debe ser superior a 4 caracteres.'
			}else if(this.add.descripcion.length < 4 ){
				this.noti.descripcion = 'La descripción debe ser superior a 4 caracteres.'
				this.noti.nombre = ''
			}else if(this.add.descripcion.length >200){
				this.noti.descripcion = 'La descripción no debe superar los 200 caracteres'
				this.noti.nombre = ''
			}else if(this.add.precio.length < 3){
				this.noti.precio = 'El precio no es correcto'
				this.noti.descripcion = ''
				this.noti.nombre = ''
			}else{
					axios.post('/menus/crear',this.add)
					.then((response)=>{
						if (this.add.adicional == 'NO') {
							M.toast({
								html:'Se ha creado el menú con éxito.',
								outDuration:1000
							});
						}else {
							M.toast({
								html:'Se ha editado con éxito.',
								outDuration:1000
							});
						}
						this.add.nombre = ''
						this.add.descripcion = ''
						this.add.precio = ''
						this.add.adicional = ''
						this.add.estado = ''
						this.getMenus()
					})
					.catch(function (error) {
						M.toast({
							html:'Hay un error en el servidor, contactanos.',
							outDuration:1000
						});
					});
			}
		},
		updateMenu:function(menu, q){
			if (q) {
				if(!menu.estado){
				menu.estado = 1
				}else{
					menu.estado = 0
				}
			}else{
				if(menu.estado){
					menu.estado = 1
				}else{
					menu.estado = 0
				}
			}
			if (menu.adicional) {
				menu.adicional = 'SI'
			}else{
				menu.adicional = 'NO'
			}
			let url = '/menus/actualizar';
			let data = {
				nombre: menu.nombre,
				descripcion:menu.descripcion,
				estado:menu.estado,
				precio:menu.precio,
				id:menu.id,
				adicional: menu.adicional
			}
			axios.put(url, data).then((resp)=>{
				// Cerrar modal
				let modalupdate = M.Modal.getInstance(actualizarMenu)
				modalupdate.close()
				M.toast({
					html:'Se ha actualizado el menu '+"'"+data.nombre+"'.",
					outDuration:1000
				});
			}).catch(function (error) {
			    M.toast({
					html:'Hay un error en el servidor, contactanos.',
					outDuration:1000
				});
			  });
		},
		deleteMenu:function(id){
			// Aún no se esta llamando dentro del documento
			let url = '/menus/eliminar/'+id
			axios.delete(url).then((resp) =>{
				this.getMenus()
				M.toast({
					html:'Se ha eliminado el menu.',
					outDuration:1000
				});
			})
		},
		updateEstado:function(menu){
			// Preguntar antes de eliminar
			swal({
			  title: "Eliminar",
			  text: "En realidad deseas eliminar el Menú ?",
			  icon: "success",
			  buttons: ['NO', 'SI'],
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
			    let url = '/menus/actualizar/estado';
				axios.put(url, menu).then((resp)=>{
				M.toast({
					html:'Se ha eliminado el menu.',
					outDuration:1000
				});

					this.getMenus()
				}).catch((error)=> {
				    M.toast({
					html:'Hay un error en el servidor, contactanos.',
					outDuration:1000
				});
				})
			  } else {
			  	M.toast({
					html:'Hemos cancelado tu solicitud.',
					outDuration:1000
				});
			  }
			});
		},
		llenarModal:function(menu){
			if (menu.adicional == 'SI') {
				menu.adicional = true
			}else{
				menu.adicional = false
			}
			this.update = menu

			console.log(menu);
		},
		getPedidos:function(){
			// this.pedidos = []
			let url = 'pedidos/pedidos'
			axios.get(url)
			  .then((resp) =>{
			    this.pedidos = resp.data.pedidos;
					this.vendidosdia = resp.data.total;
			  })
		},
		momentjs:function(fecha){
			return moment(fecha).fromNow();
		},
		number_format:function(amount, decimals) {
	    amount += ''; // por si pasan un numero en vez de un string
	    amount = parseFloat(amount.replace(/[^0-9\.]/g, '')); // elimino cualquier cosa que no sea numero o punto
	    decimals = decimals || 0; // por si la variable no fue fue pasada
	    // si no es un numero o es igual a cero retorno el mismo cero
	    if (isNaN(amount) || amount === 0)
	        return parseFloat(0).toFixed(decimals);
			    // si es mayor o menor que cero retorno el valor formateado como numero
			    amount = '' + amount.toFixed(decimals);
			    var amount_parts = amount.split('.'),
			        regexp = /(\d+)(\d{3})/;
			    while (regexp.test(amount_parts[0]))
			        amount_parts[0] = amount_parts[0].replace(regexp, '$1' + ',' + '$2');
			    return amount_parts.join('.');
			}
		}
})
