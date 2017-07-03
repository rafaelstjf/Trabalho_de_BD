function verificar(){
	var linha=document.getElementById("rol").value;
/*	var coluna=document.getElementById("col").value;	*/
	if  /*	 	( 	 	*/ (linha=="")/* || (coluna==""))*/{
		alert ("Preencha todos os campos");
	}else{
		document.tabelas.submit();
	}
}