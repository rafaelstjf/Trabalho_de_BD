function verificar(){
	var a,b,c;
	a=document.getElementById("1").value;
	b=document.getElementById("2").value;
	c=document.getElementById("3").value;
	if ((a=="") || (b=="") || (c=="")){
		alert("Favor preencher todos os campos!");
	}
	else{
		document.loop.submit();
	}
}