<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>

<script type="text/javascript" src="JS/script.js"></script>

</head>
<body> 


<?php

	$link = mysqli_connect("localhost", "root", "", "trab");

	$query = "SELECT prod.nome, SUM(est.quantidade)
		FROM trab.produto AS prod 
         LEFT JOIN trab.item AS item ON (prod.codigo = item.cod_produto)
         LEFT JOIN trab.estoque AS est ON (est.cod_item = item.codigo)
GROUP BY prod.codigo
HAVING (SUM(est.quantidade) <= 5 OR SUM(est.quantidade) IS NULL)";

	$consultaSQL = mysqli_query($link,$query);

	echo "<table border='1' align='center'>
		<tr align='center'>	
			<td>Nome do Produto</td>
			<td>Quantidade no Estoque</td>
		</tr>";
	while($row = mysqli_fetch_row($consultaSQL)){
		echo "<tr>";
		for($i=0; $i<mysqli_num_fields($consultaSQL); $i++){
			echo "<td>".$row[$i]."</td>";

		}
		echo "</tr>";
	}
	echo "</table>";

	mysqli_close($link);

?>

</body>
</html>
