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




	$list = "SELECT cod_pedido FROM pedido WHERE cod_cliente = '$codigo_login'";
	$codp = mysqli_query($link,$list);
	$objpedido = mysqli_fetch_row($codp);
	$cod_pedido = $objpedido[0];




	$cabeçalho = "SELECT pe.nota_fiscal, pe.valor_total, pe.data_pedido  FROM  pedido as pe WHERE cod_cliente = '$codigo_login'
";
	$itens = mysqli_query($link,$cabeçalho);


	$listar = "SELECT pr.nome, pr.descricao, pr.preco_venda, cp.quantidade  FROM item as t , comp_pedido as cp, produto as pr, pedido as pe WHERE pr.codigo=t.cod_produto AND t.codigo = cp.cod_item AND cp.cod_pedido = '$cod_pedido' AND cod_cliente = '$codigo_login'";
	$l1 = mysqli_query($link,$listar);
	$row_produtos = mysqli_fetch_row($l1);




	
	echo "<table border='1' align='center'>
			<tr align='center'>	
			<td>Nota Fiscal</td>
			<td>Valor Total</td>
			<td>Data do Pedido</td>
		</tr>";
	while($row_cabeçalho = mysqli_fetch_row($consultaSQL)){
		echo "<tr align='center'>";
		for($i=0; $i<mysqli_num_fields($consultaSQL); $i++){
			echo "<td>".$row_cabeçalho[$i]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";



	echo "<table border='1' align='center'>
			<tr align='center'>	
			<td>Nome do Produto</td>
			<td>Descrição</td>
			<td>Preço</td>
			<td>Quantidade</td>
		</tr>";
	while($row_produtos = mysqli_fetch_row($consultaSQL)){
		echo "<tr align='center'>";
		for($i=0; $i<mysqli_num_fields($consultaSQL); $i++){
			echo "<td>".$row_produtos[$i]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

	







	mysqli_close($link);

?>

</body>
</html>
