<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>

<script type="text/javascript" src="JS/script.js"></script>

</head>
<body> 


<?php

	session_start();


	$codigo_login = $_SESSION['codigo_login'];
	
	$link = mysqli_connect("localhost", "root", "", "trab");

	$q = "UPDATE pedido SET status = '0' WHERE cod_cliente = '$codigo_login'";
	$carrinho_fechado = mysqli_query($link, $q);





	$cabeçalho = "SELECT nota_fiscal, valor_total, data_pedido  FROM  pedido WHERE cod_cliente = '$codigo_login'
";
	$itens = mysqli_query($link,$cabeçalho);



	
	echo "<table border='1' align='center'>
			<tr align='center'>	
			<td>Nota Fiscal</td>
			<td>Valor Total</td>
			<td>Data do Pedido</td>
		</tr>";
	while($row_cabeçalho = mysqli_fetch_row($itens)){
		echo "<tr align='center'>";
		for($i=0; $i<mysqli_num_fields($itens); $i++){
			echo "<td>".$row_cabeçalho[$i]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";









	mysqli_close($link);

?>

</body>
</html>
