function validar(){
	var user=document.getElementById("login").value;
	var pass=document.getElementById("senha").value;
	if ((user!="") && (pass!="")){
		document.login.submit();
	}else{
		alert ("Preencha todos os campos corretamente!");
	}
}

function cadastrarF(){
	var nome=document.getElementById("nome").value;
	var cpf=document.getElementById("cpf").value;
	var login=document.getElementById("login").value;
	var senha=document.getElementById("senha").value;
	var cep=document.getElementById("cep").value;
	var rua=document.getElementById("rua").value;
	var num=document.getElementById("num").value;
	var comp=document.getElementById("comp").value;
	var bairro=document.getElementById("bairro").value;
	var cidade=document.getElementById("cidade").value;
	var estado=document.getElementById("estado").value;
	var telefone=document.getElementById("telefone").value;

	if ((nome!="") && (cpf!="")  && (login!="")  && (senha!="")  && (cep!="")  && (rua!="")   && (num!="") && (comp!="")  && (bairro!="")  && (cidade!="")  && (estado!="") && (telefone!="")){
		document.cadastrofisico.submit();
	}else{
		alert ("Preencha todos os campos corretamente!");
	}
}


function cadastrarJ(){
	var nome=document.getElementById("nome").value;
	var cnpj=document.getElementById("cnpj").value;
	var login=document.getElementById("login").value;
	var senha=document.getElementById("senha").value;
	var cep=document.getElementById("cep").value;
	var rua=document.getElementById("rua").value;
	var num=document.getElementById("num").value;
	var comp=document.getElementById("comp").value;
	var bairro=document.getElementById("bairro").value;
	var cidade=document.getElementById("cidade").value;
	var estado=document.getElementById("estado").value;
	var telefone=document.getElementById("telefone").value;

	if ((nome!="") && (cnpj!="")  && (login!="")  && (senha!="")  && (cep!="")  && (rua!="")   && (num!="") && (comp!="")  && (bairro!="")  && (cidade!="")  && (estado!="") && (telefone!="")){
		document.cadastrojuridico.submit();
	}else{
		alert ("Preencha todos os campos corretamente!");
	}
}
function cadastrarProd(){
	var nome=document.getElementById("nome").value;
	var descricao=document.getElementById("descricao").value;
	var preco_venda=document.getElementById("preco_venda").value;
	var preco_compra=document.getElementById("preco_compra").value;
	var quantidade=document.getElementById("quantidade").value;

	if ((nome!="") && (descricao!="")  && (preco_venda!="") && (preco_venda >"0") && (preco_compra!="") && (preco_compra >"0") && (quantidade!="") ){
		document.cadastroproduto.submit();
	}else{
		alert ("Preencha todos os campos corretamente!");
	}
}

function comprar(){
	var quant=document.getElementById("quantidade").value;
	if(quant!=""){
		document.finalizarcompra.submit();
	}else{
		alert ("Digite uma quantidade válida!");
	}
}
function goBack() {
    window.history.back();
}


function alterarProd(){
	var nome=document.getElementById("nome").value;
	var descricao=document.getElementById("descricao").value;
	var preco_venda=document.getElementById("preco_venda").value;

	if ((nome=="") && (descricao=="")  && (preco_venda=="")){
		alert ("Preencha ao menos um campo para alteração!");
	}else{
		document.editarproduto.submit();
	}
}

function cadastrarDepo(){
	var nome=document.getElementById("nome").value;
	if ((nome!="")){
		document.cadastrodeposito.submit();
	}else{
		alert ("Preencha todos os campos corretamente!");
	}
}
function vai(){
	var datai=document.getElementById("dataI").value;
	var dataf=document.getElementById("dataF").value;
	if ((datai!="") && (dataf!=)){
		document.cadastrodeposito.submit();
	}else{
		alert ("Preencha todos os campos corretamente!");
	}
}