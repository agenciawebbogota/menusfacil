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
	},
	created:function(){
		ref.on('value', (data) => {
			// console.log(data)
		  this.getPedidos()
		});
		this.getMenus()
		document.addEventListener('DOMContentLoaded', function() {
		  // Navegación
			let elems = document.querySelectorAll('.tooltipped');
		// let modalUpdate = $('#actualizarMenu').modal();
			// let tooltip = M.Tooltip.init(elems, {});
			// let sidenav = document.querySelectorAll('.sidenav');
			// M.Sidenav.init(sidenav, {});
			$(".button-collapse").sideNav();
			// $('.modal').modal();
			// Botones flotantes
			// let fixedActionBtn = M.FloatingActionButton.init(document.querySelectorAll('.fixed-action-btn'), {});
			// Modals
			// let actualizarMenu = M.Modal.init(document.querySelectorAll('#actualizarMenu'), {dismissible:false});
		});
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
			axios.get('/menus')
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
				  	Materialize.toast('Se ha creado el menú co éxito', 1000);
				  })
				  .catch(function (error) {
				    console.log(error);
				  });
			}
		},
		updateMenu:function(menu, q){
			// Ajustar para que actualice el estado
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
				
				// modalUpdate.close()
				Materialize.toast('Se ha actualizado el menu '+"'"+data.nombre+"'", 1000);

			}).catch(function (error) {
			    console.log(error);
			  });
		},
		deleteMenu:function(id){
			// Aún no se esta llamando dentro del documento
			let url = '/menus/eliminar/'+id
			axios.delete(url).then((resp) =>{
				this.getMenus()
				Materialize.toast('Se ha eliminado el menu', 1000);
			})
		},
		updateEstado:function(menu){
			// Preguntar antes de eliminar
			alertify.confirm('Confirmación', '¿ Seguro que quieres borrar el Menú ?',()=>{
				// Acción si es confirmada
				let url = '/menus/actualizar/estado';
				axios.put(url, menu).then((resp)=>{
				Materialize.toast('Se ha eliminado el menu '+"'"+menu.nombre+"'", 1000);

					this.getMenus()
				}).catch((error)=> {
				    console.log(error);
				})
			},()=>{
				// Acción si es cancelada
				M.toast({html: 'Hemos cancelado tu solicitud.', outDuration: 1000})
			}).set('labels',{ok:'Si',cancel:'No'});;
		},
		llenarModal:function(menu){
			this.update = menu
		},
		getPedidos:function(){
			this.pedidos = []
			let url = 'pedidos/'
			axios.get(url)
			  .then((resp) =>{
			    resp.data.menus.map((menu)=>{
			    	 this.pedidos.push(menu)
			    })
			  })
			  .catch(function (error) {
			    // handle error
			    console.log(error);
			  })
		},
	}
})