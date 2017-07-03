// JavaScript Document
function calcularIten(){
	var i=0;
	while(i<=18){
		var v1=document.forms[0].elements[i+1].value;
		var v2=document.forms[0].elements[i+2].value;
		
	if ((v1!="")&&(v2!="")){
			var p = parseFloat(v1);
			var q = parseFloat(v2);
			var resultado=p*q;
			var ptotal = document.forms[0].elements[i+3];
			ptotal.value=resultado;
		}
		i=i+4;
	}
}
function calcularPedido (){
	var total=0;
	var j=3;
	while (j<=19){
			var obj = document.forms[0].elements[j].value;
			if (obj!=""){
				var num = parseFloat(obj);
				total=total+num;
			}
			j+=4;
		}
		document.getElementById("valorTotal").value=total;
		var op = document.forms[0].elements[21].value;
		if(op=="1"){
			var valorParcela = total*0.9;
			valorParcela=valorParcela.toFixed(2);
			document.getElementById("formaPagamento").value="À vista";
			document.getElementById("valorParcelas").value="R$ "+valorParcela;
			}
		if(op=="3"){
			var valorParcela = total/3;
			valorParcela=valorParcela.toFixed(2);
			document.getElementById("formaPagamento").value="3x sem juros";
			document.getElementById("valorParcelas").value="R$ "+valorParcela;
			}
		if(op=="6"){
			var valorParcela = (total*1.1)/6;
			valorParcela=valorParcela.toFixed(2);
			document.getElementById("formaPagamento").value="6x com juros";
			document.getElementById("valorParcelas").value="R$ "+valorParcela;
			}
}