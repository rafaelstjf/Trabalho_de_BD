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
	$query = "SELECT nome, descricao, preco_venda, valor_sugerido, codigo FROM produto ";
	$consultaSQL = mysqli_query($link,$query);

	echo "<table border='1' align='center'>
		<tr align='center'>	
			<td>nome</td>
			<td>descrição</td>
			<td>preço de venda</td>
			<td>preço sugerido</td>
			<td colspan='2'>opções</td>
		</tr>";
	while($row = mysqli_fetch_row($consultaSQL)){
		echo "<tr>";
		for($i=0; $i<mysqli_num_fields($consultaSQL); $i++){
			if(($i%5)-4!=0) echo "<td>".$row[$i]."</td>";
			if(($i%5)-4==0) echo "<td> <a href=editar_item_produto.php?codigo=".$row[$i].">editar</a></td>";

		}
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($link);
?>

</body>
</html>
