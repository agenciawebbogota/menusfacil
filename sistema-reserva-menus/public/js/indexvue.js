new Vue({
	el:'#dash',
	data:{
		menus:'',
		total:0,
		add:{
			nombre:'',
			descripcion:'',
			precio:'',
			estado:1
		},
		noti:{
			nombre:'',
			descripcion:'',
			precio:'',
		}
	},
	created:function(){
		this.getMenus()
		$('#tablaMenus').pageMe({
          pagerSelector:'#myPager',
           activeColor: 'green',
           prevText:'Anterior',
           nextText:'Siguiente',
           showPrevNext:true,
           hidePageNumbers:false,
           perPage:10
        });
	},
	methods:{
		getMenus:function(){
			axios.get('/menus')
			  .then((response) =>{
			    this.menus = response.data.menus
			    this.total = response.data.total
			  })
			  .catch(function (error) {
			    // handle error
			    console.log(error);
			  })
		},
		addMenu:function(){
			let self = this;
			if(this.add.nombre.length < 4){
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
			  	this.getMenus()
			  	Materialize.toast('Se ha creado el menú '+response.data.id, 1000);
			  })
			  .catch(function (error) {
			    console.log(error);
			  });	
			}
		},
		updateMenu:function(menu){
			
			if(!menu.estado){
				menu.estado = 1 
			}else{
				menu.estado = 0
			}
			// console.log(menu)
			let url = '/menus/actualizar';
			let data = {
				nombre: menu.nombre,
				descripcion:menu.descripcion,
				estado:menu.estado,
				precio:menu.precio,
				id:menu.id,
			}
			axios.put(url, data).then((resp)=>{
				this.getMenus()
				Materialize.toast('Se ha actualizado el menu '+"'"+data.nombre+"'", 1000)
				// console.log(resp)
			}).catch(function (error) {
			    console.log(error);
			  });

		},
		deleteMenu:function(id){
			// Aún no se esta llamando dentro del documento
			let url = '/menus/eliminar/'+id
			axios.delete(url).then((resp) =>{
				this.getMenus()
				Materialize.toast(resp.data, 200);
				console.log(resp)
			})
		},
		updateEstado:function(menu){

			// Preguntar antes de eliminar
			let url = '/menus/actualizar/estado';
			axios.put(url, menu).then((resp)=>{
				// console.log(resp.data)
				Materialize.toast('Se ha eliminado el menu '+"'"+menu.nombre+"'", 1000)
				this.getMenus()
			}).catch(function (error) {
			    console.log(error);
			  });
		}
	}
})