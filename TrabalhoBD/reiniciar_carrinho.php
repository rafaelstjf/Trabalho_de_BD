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

	$d = date('d');
	$m = date('m');
	$y = date('Y');

	$reset_carrinho = "UPDATE pedido SET status='0'; valor_total = 0, data_pedido = (STR_TO_DATE('$y,$m,$d','%Y,%m,%d')), nota_fiscal = 0  WHERE  cod_cliente = '$codigo_login'";
	$ins_p = mysqli_query($link,$reset_carrinho);
	mysqli_close($link);

	header("Location: lista_produtos.php")


    mysqli_close($link);


?>

</body>
</html>
