// Inicialización Vue.js
new Vue({
	el: '#sucursal',
	data:{
		sucursal:{
      nombre:'',
      url:'',
			email:'',
      clave:'',
      clave_confirmacion:'',
      user_id:'',
      color1:'#2a2730',
      color2:'#66181a',
      color3:'#E88A10'
		},
		noti:{
			autorizado:false,
			nombre:'',
			email:'',
      clave:'',
			clave_confirmacion:'',
			estado_error: true,
			error:''
		}
	},
	created:function(){

	},
	methods:{
		enviarSucursal:function(){
			if (this.sucursal.nombre.length < 4) {
				this.noti.nombre = "El nombre debe ser superiro a 4 caracteres."
			}else if (!this.validarCorreo(this.sucursal.email)) {
				this.noti.email = "El correo no es válido."
			}else if(!this.noti.autorizado){
				// this.noti.email = "Corr"
			}else{
				// Enviar info
				var url = '/admin/crear-sucursal'
				axios.post(url, this.sucursal)
							.then((resp)=>{
								if (resp.data.error) {
									if (resp.data.campo == 'url') {
										this.noti.nombre = 'El nombre ya está en uso.'
										// this.noti.error = resp.data.msg
									}else if(resp.data.campo == 'email'){
										this.noti.email = 'El email ya está en uso.'
										this.noti.nombre = ''
									}
								}else{
									this.sucursal = {
										nombre:'',
										url:'',
										email:'',
										clave:'',
										clave_confirmacion:'',
										color1:'#2a2730',
										color2:'#66181a',
										color3:'#E88A10'
									}
									this.noti.email = ''
									this.noti.nombre = ''
									this.noti.estado_error = false
									this.noti.error = resp.data.msg
								}


								// (data.data.resp)
							}).catch(function(error){
								console.log(error);
								
							})
			}
		},





		validarCorreo:function(texto) {
			emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
		    if (emailRegex.test(texto)) {
		      return true;
		    } else {
		      return false;
		    }
		},
    urlLug: function(){
      var letras = this.sucursal.nombre.split('')
			var arrayLetras = [];
			letras.map(function(letra){
				if(letra.toLowerCase()=='á'){
				  arrayLetras.push('a')
				}else if(letra.toLowerCase()=='é'){
				  arrayLetras.push('e')
				}else if(letra.toLowerCase()=='í'){
				  arrayLetras.push('i')
				}else if(letra.toLowerCase()=='ó'){
				  arrayLetras.push('o')
				}else if(letra.toLowerCase()=='.'){
			      arrayLetras.push('')
			  }else if(letra.toLowerCase()=='ú'){
				  arrayLetras.push('u')
				}else if(letra.toLowerCase()=='ñ'){
				  arrayLetras.push('n')
				}else{
				  arrayLetras.push(letra.toLowerCase())
				}
			})
			this.sucursal.url = arrayLetras.toString().replace(/,/g,'').replace(/ /g,'-');
        },
        compararClave:function(){
            if (this.sucursal.clave != this.sucursal.clave_confirmacion) {
                this.noti.clave = 'Las contraseñas no cohiciden.'
                this.noti.clave_confirmacion = 'Las contraseñas no cohiciden.'
            }else{
                this.noti.clave = ''
								this.noti.clave_confirmacion = ''
								
							this.noti.autorizado = true
            }
        }
    },
})
