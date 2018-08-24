new Vue({
  el:'#superadmin',
  data:{
    usuarios: [],
    update:[]
  },
  mounted:function(){
		document.addEventListener('DOMContentLoaded', ()=> {
			// Botones flotantes
			let fixedActionBtn = M.FloatingActionButton.init(document.querySelectorAll('.fixed-action-btn'), {});
			let actualizarMenu = M.Modal.init(document.querySelectorAll('#actualizarUser'), {dismissible:false});
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
			  .catch(function (error) {

			  })
    },
    actualizarDias(){
      axios.get('usuarios/actualizardias')
			  .then((resp) =>{
          console.log(resp.data);
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
      }
    ]);
    }
  }
})
