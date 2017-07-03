<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Array!</title>
</head>

<body>
<?php
	$nomes = array("Paulo","Fernanda","Maria","Bruno");
	$resultado=$_POST["src"];
	
	function busca($resultado,$nomes){
		$saida=-1;
		$i;	
		for($i=0;$i<sizeof($nomes);$i++) {
			if ($nomes[$i]==$resultado){
				$saida=$i;
			}
		}
		
		if ($saida!=-1){

			echo "O nome desejado está na posição: ".$saida;
		}
		else{
			echo "O nome desejado não se encontra no vetor!";
		}
	}
	
	busca($resultado,$nomes);

?>
</body>
</html>