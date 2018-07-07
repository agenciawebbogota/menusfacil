new Vue({
	el:'#dash',
	data:{
		menus:'',
		total:0,
		add:{
			nombre:'',
			descripcion:'',
			precio:'',
			estado:false
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
			  	// Pasando los datos a la variable del modelo
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
			// Validar antes del envío
			if(this.add.nombre.length < 4){
				this.noti.nombre = 'El nombre no es correcto'
			}else{
			// Enviar los datos
			axios.post('/menus/crear',this.add)
			  .then((response)=>{
			  	this.getMenus()
			  	Materialize.toast('Se ha creado el menú '+response.data.id, 2000);
			  })
			  .catch(function (error) {
			    console.log(error);
			  });
				
			}


		},
		updateMenu:function(menu){
			
		},
		deleteMenu:function(id){
			// Aún no se esta llamando dentro del documento
			let url = '/menus/eliminar/'+id
			axios.delete(url).then((resp) =>{
				this.getMenus()
				Materialize.toast(resp.data, 2000);
				console.log(resp)
			})
		},
		updateEstado:function(menu){

			// Preguntar antes de eliminar
			let url = '/menus/actualizar/estado';
			axios.put(url, menu).then((resp)=>{
				// console.log(resp.data)
				Materialize.toast('Se ha eliminado el menu '+"'"+menu.nombre+"'")
				this.getMenus()
			}).catch(function (error) {
			    console.log(error);
			  });
		}
	}
})