<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>p06 - Switch case</title>
<link rel="stylesheet" type="text/css" href="Estilo/estilo.css"/>
<link rel="icon" type="image/png" href="Imagens/ea_logo.png" />
</head>

<body>
<?php
	echo "<table><tr><td>";
	echo "<p align='center'>Opção escolhida:</p><br>";
	$op=$_POST["op"];
	switch($op){
		case 1:
			echo "<p align='center'>Comprar</p>";
			break;
		case 2:
			echo "<p align='center'>Informações</p>";
			break;
		case 3:
			echo "<p align='center'>Reclamações</p>";
			break;
		case 4:
			echo "<p align='center'>Cancelamento</p>";
			break;
		default:
			echo "<p align='center'>Falar com atendente<br>Aguarde...</p>";
			break;
	}
	echo "</td></tr></table>"
?>
</body>
</html>