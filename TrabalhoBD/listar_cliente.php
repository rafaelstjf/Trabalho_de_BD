<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>
</head>
<body> 



<?php
	
	$link = mysqli_connect("localhost", "root", "", "trab");
	$query = "SELECT p.cpf,p.nome,e.rua,e.numero,e.complemento,e.bairro,r.cidade,r.estado FROM pessoa AS p, endereco AS e, regiao AS r WHERE tipo = '0' AND p.cod_endereco = e.codigo AND e.cod_regiao = r.codigo";	$consultaSQL = mysqli_query($link,$query);

	echo "<table border='1' align='center'>
		<tr align='center'>	
			<td>CPF</td>
			<td>NOME</td>
			<td>RUA</td>
			<td>NÚMERO</td>
			<td>COMPLEMENTO</td>
			<td>BAIRRO</td>
			<td>CIDADE</td>
			<td>ESTADO</td>
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
