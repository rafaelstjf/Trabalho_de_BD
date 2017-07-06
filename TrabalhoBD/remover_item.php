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

	$cod_item = $_GET['codigo'];


	$select = "SELECT quantidade FROM comp_pedido WHERE cod_item = '$cod_item' AND cod_cliente = '$codigo_login'";

	$sel = mysqli_query($link,$select);	
	$obj4 = mysqli_fetch_row($sel);
	$quant = $obj4[0];

	$q1 = "SELECT cod_endereco FROM pessoa WHERE cod_cliente = '$codigo_login'";
	$s1 = mysqli_query($link,$q1);
	$obj1 = mysqli_fetch_row($s1);
	$cod_endereco = $obj1[0];

	
	$q2 = "SELECT codigo FROM deposito WHERE cod_endereco = '$cod_endereco'";
	$s2 = mysqli_query($link,$q2);
	$obj2 = mysqli_fetch_row($s2);
	$cod_deposito = $obj2[0];

		
	$q3 = "SELECT quantidade FROM estoque WHERE cod_item = '$codigo_produto' AND cod_deposito = '$cod_deposito";
	$s3 = mysqli_query($link,$q3);
	$obj3 = mysqli_fetch_row($s3);
	$quant_estoque = $obj3[0];


	$quant_estoque = $quant_estoque + $quant;

	$update_estoque = "UPDATE estoque SET quantidade = '$quant_estoque' WHERE cod_item = '$codigo_produto' AND cod_deposito = $cod_deposito";
	$update = mysqli_query($link,$update_estoque);


	$delete_cp = "DELETE FROM comp_pedido WHERE cod_item = '$cod_item' AND cod_cliente = '$codigo_login'";
	$delete = mysqli_query($link,$delete_cp);

	header("Location: editar_carrinho.php");
	
	mysqli_close($link);

?>

</body>
</html>
