
new Vue({
	el:'#registrar',
	data:{
		url:'',
		datos:{
			'url':'',
			'color1':'',
			'color2':'',
			'color3':'',
			muestraColor1:'',
			name:'',
		}
	},
	mounted:function(){
		this.datos._token = $("[type='hidden']").val()
		this.url = $("form").attr('action')
	},
	methods:{
		urlLug:function(){
		  	let letras = this.datos.name.split('')
			let arrayLetras = [];
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
			this.datos.url = arrayLetras.toString().replace(/,/g,'').replace(/ /g,'-');
		}
	},
	getColor:function(){
		console.log(this.color1)
	}
})
