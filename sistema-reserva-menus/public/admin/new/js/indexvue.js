new Vue({
	el:'#dash',
	data:{
		menus:'',
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
			estado:''
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
			// let elems = document.querySelectorAll('.tooltipped');	 		
			let tooltip = M.Tooltip.init(document.querySelectorAll('.tooltipped'), {});		
			let sidenav = M.Sidenav.init(document.querySelectorAll('.sidenav'), {});			
		})
	},
	created:function(){
		ref.on('value', (data) => {
			// console.log(data)
		  this.getPedidos()
		});
		this.getMenus()
		setInterval(()=>{
			let LaFecha=new Date();
			let Mes=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
			let diasem=new Array('Dom.','Lun.','Mar.','Mier.','Jue.','vie.','Sab.');
			let diasemana=LaFecha.getDay();
			let FechaCompleta="";
			let NumeroDeMes="";
			let hora = LaFecha.getHours()
			let minuto = LaFecha.getMinutes()
			let segundo = LaFecha.getSeconds()
			NumeroDeMes=LaFecha.getMonth();
			FechaCompleta=diasem[diasemana]+" "+LaFecha.getDate()+" de "+Mes[NumeroDeMes]+" de "+LaFecha.getFullYear()+" "+hora+":"+minuto+":"+segundo;
			this.fecha = FechaCompleta;
		} , 1000);
	},
	methods:{
		getMenus:function(){
			axios.get('/menus/get')
			  .then((response) =>{
			    this.menus = response.data.menus
			    this.total = response.data.total

			  })
			  .catch(function (error) {
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
				  	this.add.nombre = ''
				  	this.add.descripcion = ''
				  	this.add.precio = ''
				  	this.add.adicional = ''
				  	this.add.estado = ''
				  	this.getMenus()
				  	M.toast({
						html:'Se ha creado el menú co éxito.', 
						outDuration:1000
					});
				  })
				  .catch(function (error) {
				    console.log(error);
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
			let url = '/menus/actualizar';
			let data = {
				nombre: menu.nombre,
				descripcion:menu.descripcion,
				estado:menu.estado,
				precio:menu.precio,
				id:menu.id,
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
			    console.log(error);
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
				    console.log(error);
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
			this.update = menu
		},
		getPedidos:function(){
			// this.pedidos = []
			let url = 'pedidos/pedidos'
			axios.get(url)
			  .then((resp) =>{
			    this.pedidos = resp.data;
			  })
			  .catch(function (error) {
			    // handle error
			    console.log(error);
			  })
		},
	}
})
