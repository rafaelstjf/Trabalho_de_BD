function validar(){
	var login=document.getElementById("nomeS").value;
	var senha=document.getElementById("senhaS").value;
	if ((login!="") && (senha!="")){
		document.login.submit();
	}else{
		alert ("Preencha todos os campos necessários!");
	}
}
function validar2(){
	var origem=document.getElementById("origemS").value;
	var destino=document.getElementById("destinoS").value;
	if (origem==destino){
		alert("A origem e o destino não podem ser iguais!\n\nPor favor, escolha novamente a origem e o destino.");
	}else{
		document.cadastro.submit();
	}
}