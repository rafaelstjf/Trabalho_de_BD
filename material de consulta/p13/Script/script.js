function verificar(){
	var nome=document.getElementById("userJ");
	var senha=document.getElementById("passJ");;
	
		if((nome.value!="") && (senha.value!="")){
			document.login.submit();
	}
		else{
			alert("Preencha todos os campos corretamente!")
	}
}
