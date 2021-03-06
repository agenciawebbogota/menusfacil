new Vue({
  el:'#superadmin',
  data:{
    usuarios: [],
    update:[],
    search:'',
  },
  mounted:function(){
		document.addEventListener('DOMContentLoaded', ()=> {
			// Botones flotantes
			let fixedActionBtn = M.FloatingActionButton.init(document.querySelectorAll('.fixed-action-btn'), {});
			let actualizarUser = M.Modal.init(document.querySelectorAll('#actualizarUser'), {dismissible:false});
			let tooltip = M.Tooltip.init(document.querySelectorAll('.tooltipped'), {});
			let sidenav = M.Sidenav.init(document.querySelectorAll('.sidenav'), {});
		})
	},
  created:function(){
    this.getUsers()
  },
  methods:{
    getUsers(){
      axios.get('usuarios/get')
			  .then((resp) =>{
          this.usuarios = resp.data
			  })
			  .catch((error)=>{
			  })
    },
    actualizarUser(){
      var url = '/usuarios/actualizarUsuario';
      axios.put(url, this.update)
			  .then((resp) =>{
          this.getUsers()
          let modalupdate = M.Modal.getInstance(actualizarUser)
  				modalupdate.close()
  				M.toast({
  					html:'Se ha actualizado el usuario '+"'"+this.update.name+"'.",
  					outDuration:1000
  				});
			  })
			  .catch(function (error) {

			  })
    },
    llenarModal:function(usuario){
      this.update = usuario;
    },
    vistaGuiada(){
      // Intro de la web
      introJs().start()
      introJs().addStep([{
          element: document.querySelectorAll('#historicomnus')[0],
          intro: "Ok, wasn't that fun?",
          position: 'left'
      },
      {
        element: document.querySelectorAll('#editaruser')[0],
        intro: "Ok, wasn't that fun?",
        position: 'right'
      },
      {
        element: document.querySelectorAll('#eliminaruser')[0],
        intro: "Ok, wasn't that fun ?",
        position: 'right'
      },
      {
        element: document.querySelectorAll('#cerrar')[0],
        intro: "Ok, wasn't that fun?",
        position: 'right'
      },
    ]);
    }
  }
})
