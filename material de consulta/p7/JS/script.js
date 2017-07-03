// JavaScript Document
var pu1,pu2,pu3,pu4,pu5;
var qt1,qt2,qt3,qt4,qt5;
var st1,st2,st3,st4,st5;
var valortotal;
var formapg;
var pgto;
var valorp;
var valorParcela;
function subtotal1(){
	pu1=parseFloat(document.getElementById("preco1").value);
	qt1=document.getElementById("quant1").value;
	st1=document.getElementById("total1");
	st1.value=pu1*qt1;
}
function subtotal2(){
	pu2=parseFloat(document.getElementById("preco2").value);
	qt2=document.getElementById("quant2").value;
	st2=document.getElementById("total2");
	st2.value=pu2*qt2;
}
function subtotal3(){
	pu3=parseFloat(document.getElementById("preco3").value);
	qt3=document.getElementById("quant3").value;
	st3=document.getElementById("total3");
	st3.value=pu3*qt3;
}
function subtotal4(){
	pu4=parseFloat(document.getElementById("preco4").value);
	qt4=document.getElementById("quant4").value;
	st4=document.getElementById("total4");
	st4.value=pu4*qt4;
}
function subtotal5(){
	pu5=parseFloat(document.getElementById("preco5").value);
	qt5=document.getElementById("quant5").value;
	st5=document.getElementById("total5");
	st5.value=pu5*qt5;
}
function calcular(){
	formapg=document.getElementById("parcelas");
	pgto=document.getElementById("formaPagamento");
	valortotal=document.getElementById("valorTotal");
	st1=parseFloat(document.getElementById("total1").value);
	st2=parseFloat(document.getElementById("total2").value);
	st3=parseFloat(document.getElementById("total3").value);
	st4=parseFloat(document.getElementById("total4").value);
	st5=parseFloat(document.getElementById("total5").value);
	valorp=document.getElementById("valorParcelas");
	valortotal.value=st1+st2+st3+st4+st5;

	if (formapg.value=="1"){
			valorParcela=valortotal.value*0.9;
			valorParcela=valorParcela.toFixed(2);
			valorp.value="R$ "+valorParcela;
			pgto.value="À vista";
		}
	if (formapg.value=="3"){
			valorParcela=valortotal.value/3;
			valorParcela=valorParcela.toFixed(2);
			valorp.value="R$ "+valorParcela;
			pgto.value="3x sem juros";
		}
	if (formapg.value=="6"){
			valorParcela=(valortotal.value*1.1)/6;
			valorParcela=valorParcela.toFixed(2);
			valorp.value="R$ "+valorParcela;
			pgto.value="6x com juros";
		}
}