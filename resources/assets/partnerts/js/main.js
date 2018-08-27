new Vue({
  el:'#partnerts',
  data:{
    partnert:{
      nombre:'',
      correo:'',
      telefono:'',
    },
  },
  mounted:function(){
		document.addEventListener('DOMContentLoaded', ()=> {
			// Botones flotantes
			let fixedActionBtn = M.FloatingActionButton.init(document.querySelectorAll('.fixed-action-btn'), {});
			let tooltip = M.Tooltip.init(document.querySelectorAll('.tooltipped'), {});
		})
	},
  methods:{
    registrar(){
      if (this.partnert.nombre.length < 3) {
        M.toast({
          html:'El nombre no es válido.',
          classes: 'rounded',
          outDuration:1000
        });
      }else if (this.partnert.telefono.length < 5) {
        M.toast({
          html:'El teléfono no es válido.',
          outDuration:1000,
          classes: 'rounded'
        });
      }else {
        let url = '';
        axios.post(url, this.partnert).then((resp)=>{
          console.log(resp);
          M.toast({
            html:'Bienvenido a MenusFacil, revisa en breve tu correo para los detalles del programa.',
            outDuration:1000,
            classes: 'rounded'
          });
        }).catch((error)=>{
          M.toast({
            html:'Parece que ya tenemos alguien registrado con este correo.',
            outDuration:1000,
            classes: 'rounded'
          });
        })

      }
    }
  }
})
