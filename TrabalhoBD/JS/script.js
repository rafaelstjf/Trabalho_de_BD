function validar(){
	var user=document.getElementById("user").value;
	var pass=document.getElementById("pass").value;
	if ((user!="") && (pass!="") ||(user!=" ") && (pass!=" ") ){
		document.login.submit();
	}else{
		alert ("Preencha todos os campos corretamente!");
	}
}

function cadastrarF(){
	var nome=document.getElementById("nome").value;
	var cpf=document.getElementById("cpf").value;
	var loginf=document.getElementById("loginf").value;
	var senhaf=document.getElementById("senhaf").value;
	var cep=document.getElementById("cep").value;
	var rua=document.getElementById("rua").value;
	var num=document.getElementById("num").value;
	var comp=document.getElementById("comp").value;
	var bairro=document.getElementById("bairro").value;
	var cidade=document.getElementById("cidade").value;
	var estado=document.getElementById("estado").value;

	if ((nome!="") && (cpf!="")  && (loginf!="")  && (senhaf!="")  && (cep!="")  && (rua!="")   && (num!="") && (comp!="")  && (bairro!="")  && (cidade!="")  && (estado!="")){
		document.cadastrofisico.submit();
	}else{
		alert ("Preencha todos os campos corretamente!");
	}
}


function cadastrarJ(){
	var nome=document.getElementById("nome").value;
	var cnpj=document.getElementById("cnpj").value;
	var loginj=document.getElementById("loginj").value;
	var senhaj=document.getElementById("senhaj").value;
	var cep=document.getElementById("cep").value;
	var rua=document.getElementById("rua").value;
	var num=document.getElementById("num").value;
	var comp=document.getElementById("comp").value;
	var bairro=document.getElementById("bairro").value;
	var cidade=document.getElementById("cidade").value;
	var estado=document.getElementById("estado").value;

	if ((nome!="") && (cnpj!="")  && (loginj!="")  && (senhaj!="")  && (cep!="")  && (rua!="")   && (num!="") && (comp!="")  && (bairro!="")  && (cidade!="")  && (estado!="")){
		document.cadastrojuridico.submit();
	}else{
		alert ("Preencha todos os campos corretamente!");
	}
}