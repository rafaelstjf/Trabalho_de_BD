<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>

<script type="text/javascript" src="JS/script.js"></script>

</head>
<body> 


<?php
	
	$codigo_produto=$_GET['codigo'];

	$link = mysqli_connect("localhost", "root", "", "trab");
	$query = "SELECT nome, descricao, preco_venda FROM produto WHERE codigo = '$codigo_produto' ";
	$consultaSQL = mysqli_query($link,$query);



	$obj = mysqli_fetch_row($consultaSQL);
	echo "
		<form name='produto' method='post' action='finalizarcompra.php'>
		<table border='1' align='center'>
			<tr align='center'>	
				<td>nome</td>
				<td>descrição</td>
				<td>preço</td>
				
			</tr>
			<tr>
				<td>".$obj[0]."</td>
				<td>".$obj[1]."</td>
				<td>".$obj[2]."</td>
			</tr>
			<tr>
				<td colspan = '2'>quantidade:</td>
				<td><input type='number' name='quantidade' id='quantidade' min='1'/></td>
			</tr>
			<tr>
				<input type='hidden' name='preco' id='preco' value='".$obj[2]."' />
				<input type='hidden' name='codigo_produto' id='codigo_produto' value='".$codigo_produto."' />
				<td colspan ='3' align='center'><input type='submit' value='Comprar' onclick='comprar();'></td>
			</tr>
		</table>
		</form>";
	mysqli_close($link);
?>

</body>
</html>
