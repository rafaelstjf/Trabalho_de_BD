<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>
</head>
<body> 



<?php
	session_start();

	$nome=$_POST["login"];
	$senha=$_POST["senha"];

	$link = mysqli_connect("localhost", "root", "", "trab");
	$query = "SELECT tipo,codigo,email,senha FROM pessoa WHERE email = '$nome' AND senha = '$senha'";
	$consultaSQL = mysqli_query($link,$query);
	$obj = mysqli_fetch_row($consultaSQL);

	$tipo = $obj[0];
	$codigo_login = $obj[1];
	$saida = mysqli_num_rows($consultaSQL);

	$_SESSION['codigo_login'] = $codigo_login;

	if($saida == 1) {
		if($tipo == 0){
			header ("Location: lista_produtos.php");
		}else if($tipo == 2){
			header ("Location: gerenciar.php");			
		}else if($tipo == 1) 
			header("Location: acesso_negado.php")

	}else{
		header ("Location: login_invalido.php");
	}
	mysqli_close($link);
?>


</body>
</html>
