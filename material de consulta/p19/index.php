<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>PHP e MySQL</title>
</head>

<body>
<?php
	//Passo 01 - Conectar com o SGBD
	$conexao=mysql_connect("127.0.0.1", "root", "");
	
	//Passo 02 - Selecionar o banco de dados
	mysql_select_db("projeto01",$conexao );
	
	//Passo 03 - Definir uma consulta SQL
	$consultaSQL = mysql_query("SELECT * FROM usuarios",$conexao);
	echo "<table border='1'>
		<tr align='center'center'>	
			<td>ID</td>
			<td>Nome</td>
			<td>Login</td>
			<td>Senha</td>
		</tr>";
	//Passo 04 - Exibir resultados da consulta SQL
	while($linha=mysql_fetch_row($consultaSQL)){
		echo "<tr>";
		for($i=0; $i<mysql_num_fields($consultaSQL); $i++){
			echo "<td>".$linha[$i]."</td>";
		}
		echo "</tr>";
	}
	echo "</tr></table>";
	//Passo 05 - Fechar a conexão com o SGBD
	mysql_close($conexao);
?>
</body>
</html>