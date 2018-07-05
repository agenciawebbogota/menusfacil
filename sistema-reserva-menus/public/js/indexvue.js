new Vue({
	el:'#dash',
	data:{
		menus:'',
		add:{
			nombre:'',
			descripcion:'',
			precio:'',
			estado:false
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
			let self = this
			axios.get('/menus')
			  .then(function (response) {
			  	// Pasando los datos a la variable del modelo
			    self.menus = response.data
			  })
			  .catch(function (error) {
			    // handle error
			    // console.log(error);
			  })
		},
	addMenu:function(){
		let self = this;
		// Validar antes del envío

		// Enviar los datos
		axios.post('/menus/crear',this.add)
		  .then(function (response){
		  	self.getMenus()
		  	Materialize.toast('Se ha creado el menú '+response.data.id, 1000);
		  })
		  .catch(function (error) {
		    console.log(error);
		  });
	}
	}
})