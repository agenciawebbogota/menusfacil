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
    var tiempo = setInterval(()=>{
      // alert("Hello");
      this.hora()
    }, 1000 );

    this.getUsers()
  },
  methods:{
    getUsers(){
      axios.get('usuarios/get')
			  .then((resp) =>{
          this.usuarios = resp.data
          // console.log(resp.data);
			  })
			  .catch(function (error) {

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
    actualizarDias(){
      axios.put('/usuarios/actualizardias', {data:true})
			  .then((resp) =>{
          this.getUsers()
          M.toast({
  					html:'Actualización completada.',
  					outDuration:1000
  				});
			  })
			  .catch(function (error) {

			  })
    },
    llenarModal:function(usuario){
      this.update = usuario;
    },
    hora:function(){
      // console.log('algo');
      var dt = new Date();
      // Display the month, day, and year. getMonth() returns a 0-based number.
      var mes = dt.getMonth()+1;
      var dia = dt.getDate();
      var year = dt.getFullYear();
      var hora = dt.getHours();
      var minutos = dt.getMinutes();
      var segundos = dt.getSeconds()
      var horaYsegundos = hora+':'+minutos+':'+segundos;
      var calcularDias = '9:0:10';
      if(horaYsegundos == calcularDias){
        this.actualizarDias();
        clearInterval(this.tiempo);
        // console.log('Son iguales');
      }
    },
    // buscador: function(){
    //   var self = this
    //   self.usuarios.find((usuario) => {
    //     console.log(usuario.name == self.search)
    //   })
    // },
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
