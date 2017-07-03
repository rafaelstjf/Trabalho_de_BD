<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login com BD</title>
<link rel="stylesheet" type="text/css" href="CSS/style.css" />
</head>

<body>
<?php
	$nome=$_POST["nome"];
	$senha=$_POST["senha"];
	$conexao=mysql_connect("127.0.0.1", "root", "");
	mysql_select_db("projeto01",$conexao );
	$consultaSQL = mysql_query("SELECT login,senha FROM usuarios WHERE login='$nome' AND senha='$senha'",$conexao);
	$saida=mysql_num_rows($consultaSQL);
	echo "<table class='table'  align='center'><tr>";
	if ($saida==1){
		echo "<td colspan='2'><p align='center'>Seja Bem-Vindo!!</p></td>";
	}else{
		header ("Location: http://localhost/02-P.I./p20/erro.html");
	}
	echo "</tr></table>";
	mysql_close($conexao);
?>
</body>
</html>