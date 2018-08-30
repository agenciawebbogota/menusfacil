new Vue({
  el:'#partnerts',
  data:{
    correos:[],
    partnert:{
      nombre:'',
      correo:'',
      telefono:'',
    },
  },
  mounted:function(){
    this.getPartnerts()
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
          outDuration:1000
        });
      }else if (this.partnert.telefono.length < 5) {
        M.toast({
          html:'El teléfono no es válido.',
          outDuration:1000,
        });
      }else{
        var buscado = this.correos[this.correos.indexOf(this.partnert.correo)];
        if (buscado != undefined) {
          M.toast({
            html:'Parece que ya tenemos alguien registrado con este correo.',
            outDuration:1000,
          });
        }else{
          let url = '';
          axios.post(url, this.partnert).then((resp)=>{
            M.toast({
              html:'Bienvenido a MenusFacil, revisa en breve tu correo para los detalles del programa.',
              outDuration:1000,
            });
            this.partnert = {
              nombre:'',
              correo:'',
              telefono:'',
            }
          }).catch((error)=>{
            M.toast({
              html:'Parece, que tenemos problemas con nuestro servidor, estamos trabajando para solucionarlo.',
              outDuration:1000,
            });
          })
        }
      }
    },
    getPartnerts(){
      let url = '/partnerts/get';
      axios.get(url).then((resp)=>{
        resp.data.map((partnert)=>{
          this.correos.push(partnert.correo)
        })
      })
    }
  }
})
