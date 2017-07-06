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

	$query = "SELECT prod.nome, dep.nome, SUM(est.quantidade) , reg.cidade, reg.estado
		FROM trab.produto AS prod 
         LEFT JOIN trab.item AS item ON (prod.codigo = item.cod_produto)
         LEFT JOIN trab.estoque AS est ON (est.cod_item = item.codigo)
         LEFT JOIN trab.deposito AS dep ON (est.cod_deposito = dep.codigo)
         LEFT JOIN trab.endereco as ende ON (ende.codigo = dep.cod_endereco)
         LEFT JOIN trab.regiao as reg ON (ende.cod_regiao = reg.codigo)
		GROUP BY dep.codigo
		HAVING (SUM(est.quantidade) <= 50000 OR SUM(est.quantidade) IS NULL)
		ORDER BY dep.codigo;";

	$consultaSQL = mysqli_query($link,$query);

	echo "<table border='1' align='center'>
		<tr align='center'>	
			<td>Nome do Produto</td>
			<td>Nome do Depósito</td>
			<td>Quantidade no Estoque</td>
			<td>Cidade do Depósito</td>
			<td>Estado do Depósito</td>
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
