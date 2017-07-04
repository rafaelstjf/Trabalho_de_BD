<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>
</head>
<body> 



<?php
	
	$nome=$_POST["nome"];
	$senha=$_POST["senha"];

	$link = mysqli_connect("localhost", "root", "", "trab");
	$query = "SELECT login,senha FROM pessoa WHERE login = '$nome' AND senha = '$senha'";
	$consultaSQL = mysqli_query($link,$query);
	$saida = mysqli_num_rows($consultaSQL);
	if($saida == 1) {
		header ("Location: http://localhost/TrabalhoBD/conectado.php");
	}else{
		header ("Location: http://localhost/TrabalhoBD/login_invalido.php");
	}
	mysqli_close($link);
?>
</body>
</html>
