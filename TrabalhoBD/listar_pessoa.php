<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>
</head>
<body> 



<?php
	
	$link = mysqli_connect("localhost", "root", "", "trab");
	$query = "SELECT * FROM pessoa";
	$consultaSQL = mysqli_query($link,$query);

	echo "<table border='1'>
		<tr align='center'>	
			<td>cpf</td>
			<td>cnpj</td>
			<td>tipo</td>
			<td>cep</td>
			<td>cod endereço</td>
			<td>nome</td>
			<td>login</td>
			<td>senha</td>
		</tr>";
	while($row = mysqli_fetch_row($consultaSQL)){
		echo "<tr>";
		for($i=0; $i<mysqli_num_fields($consultaSQL); $i++){
			echo "<td>".$row[$i]."</td>";
		}
		echo "</tr>";
	}
	echo "</tr></table>";
	mysqli_close($link);
?>
</body>
</html>
