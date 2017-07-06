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




	$list = "SELECT cod_pedido FROM pedido WHERE (cod_cliente = '$codigo_login' AND status = '0')";
	$codp = mysqli_query($link,$list);
	$objpedido = mysqli_fetch_row($codp);
	$cod_pedido = $objpedido[0];



	$listar = "SELECT pr.nome, pr.descricao, pr.preco_venda, cp.quantidade, cp.cod_item  FROM item as t , comp_pedido as cp, produto as pr, pedido as pe WHERE pr.codigo=t.cod_produto AND t.codigo = cp.cod_item AND cp.cod_pedido = '$cod_pedido' AND pe.cod_cliente = '$codigo_login'";
	$l1 = mysqli_query($link,$listar);


	echo "<table border='1' align='center'>
			<tr align='center'>	
			<td>Nome do Produto</td>
			<td>Descrição</td>
			<td>Preço</td>
			<td>Quantidade</td>
			<td>Remover</td>
		</tr>";
	while($row_produtos = mysqli_fetch_row($l1)){
		echo "<tr align='center'>";
		for($i=0; $i<mysqli_num_fields($l1); $i++){
			if(($i%5)-4!=0) echo "<td>".$row_produtos[$i]."</td>";
			if(($i%5)-4==0) echo "<td> <a href=remover_item.php?codigo=".$row_produtos[$i].">Remover</a></td>";
			

		}
		echo "</tr>";
	}
	echo "</table>";

	
	mysqli_close($link);

?>

</body>
</html>
