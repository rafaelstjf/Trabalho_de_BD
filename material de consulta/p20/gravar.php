<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login com BD</title>
<link rel="stylesheet" type="text/css" href="CSS/style.css" />
</head>

<body>
<?php
	$nome=$_POST["nome1"];
	$senha=$_POST["senha1"];
	$login=$_POST["log1"];
	$conexao=mysql_connect("127.0.0.1", "root", "");
	mysql_select_db("projeto01",$conexao );
	$consultaSQL = mysql_query("INSERT INTO usuarios (nome,login,senha) VALUES ('$nome','$login','$senha')",$conexao);
	mysql_close($conexao);
		header ("Location: http://localhost/02-P.I./p20/index.html");

?>
</body>
</html>