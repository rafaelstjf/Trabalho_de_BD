<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>
</head>
<body> 



<?php
	
	$link = mysqli_connect("localhost", "root", "", "trab");
	$query = "SELECT r.cidade, r.estado, d.nome  FROM regiao r LEFT JOIN deposito d ON (d.cod_endereco = r.codigo)";
	$consultaSQL = mysqli_query($link,$query);

	echo "<table border='1' align='center'>
		<tr align='center'>	
			<td>CIDADE</td>
			<td>ESTADO</td>
			<td>CÓDIGO DEPÓSITO</td>
		</tr>";
	while($row = mysqli_fetch_row($consultaSQL)){
		echo "<tr>";
		for($i=0; $i<mysqli_num_fields($consultaSQL); $i++){

			if($row[$i] != NULL) echo "<td>".$row[$i]."</td>";
			else echo "<td>N/A</td>";
		}
		echo "</tr>";
	}
	echo "</tr></table>";
	mysqli_close($link);
?>
</body>
</html>


