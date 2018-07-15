
new Vue({
	el:'#login',
	data:{
		datos:{
			password:'',
			email:'',
			_token:''
		}
	},
	mounted:function(){
		this.datos._token = $("[type='hidden']").val()
	},
	methods:{
		login:function(){
			console.log('algo')
		}
	}
})