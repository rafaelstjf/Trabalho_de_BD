function validacao(){
	var user1=document.getElementById("user1").value;
	var pass1=document.getElementById("pass1").value;
	var log1=document.getElementById("login1").value;
	if ((user1!="") && (pass1!="") && (log1!="")){
		document.cadastro.submit();
	}else{
		alert ("Preencha todos os campos corretamente!");
	}
}