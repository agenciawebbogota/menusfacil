new Vue({
    el: '#ordenes',
    data:{
        pedidos:false
    },
    mounted(){
		document.addEventListener('DOMContentLoaded', ()=> {
			// Botones flotantes
			// let fixedActionBtn = M.FloatingActionButton.init(document.querySelectorAll('.fixed-action-btn'), {});
			// let actualizarMenu = M.Modal.init(document.querySelectorAll('#actualizarMenu'), {dismissible:false});
			let tooltip = M.Tooltip.init(document.querySelectorAll('.tooltipped'), {});
            // let sidenav = M.Sidenav.init(document.querySelectorAll('.sidenav'), {});
		})
    },
    created(){
        ref.on('value', (data) => {
            this.getOrdenes()
        });
        moment.locale('es');
    },
    methods:{
        getOrdenes(){
            let url = '/pedidos/pedidos'
			axios.get(url)
			  .then((resp) =>{
                this.pedidos = resp.data.pedidos;
                console.log(this.pedidos);
                                             
              })
              .catch((error=>{
                  console.log(error);
              }))
        },
        momentjs:function(fecha){
			return moment(fecha).fromNow();
		},
    }
})