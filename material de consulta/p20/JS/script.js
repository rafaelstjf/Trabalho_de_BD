function validar(){
	var user=document.getElementById("user").value;
	var pass=document.getElementById("pass").value;
	if ((user!="") && (pass!="")){
		document.login.submit();
	}else{
		alert ("Preencha todos os campos corretamente!");
	}
}