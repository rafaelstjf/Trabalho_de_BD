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

	$codigo_produto=$_POST['codigo_produto'];
	$qnt=$_POST['quantidade'];


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

	$q4 = "SELECT status FROM pedido WHERE cod_cliente = '$codigo_login";
	$s4 = mysqli_query($link,$q4);
	$obj4 = mysqli_fetch_row($s4);
	$status = $obj4[0];

	if($quant_estoque >= $qnt){
		if ($status == 0){

			$preco=$_POST['preco'];
			$preco = intval($preco);

			$total = $qnt*$preco;

			$today = getdate();
			$d = $today['mday'];
			$m = $today['mon'];
			$y = $today['year'];
			$date = $d."/".$m."/".$y;

			$query = "SELECT valor_total FROM pedido WHERE cod_cliente = '$codigo_login'";
			$select = mysqli_query($link,$query);
			$obj = mysqli_fetch_row($select);
			$valortotal = $obj[0];

			$valortotal = intval($valortotal);
			$valortotal = $valortotal + $total;

			$notaf = rand(0,9223372036854775807);

			$insert_pedido = "UPDATE pedido SET valor_total = '$valortotal', data_pedido = '$date', nota_fiscal = '$notaf'  WHERE  cod_cliente = '$codigo_login'";
			$ins_p = mysqli_query($link,$insert_pedido);


			$qpedido = "SELECT cod_pedido FROM pedido WHERE cod_cliente = '$codigo_login'";
			$spedido = mysqli_query($link,$qpedido);
			$objpedido = mysqli_fetch_row($spedido);
			$cod_pedido = $objpedido[0];

			$insert_itens_pedido = "INSERT INTO comp_pedido (cod_pedido,cod_item,cod_cliente,valor_venda,quantidade) VALUES ('$cod_pedido','$codigo_produto','$codigo_login','$preco','$qnt')"
			$isp = mysqli_query($link,$insert_itens_pedido);

			$quant_estoque = $quant_estoque - $qnt;



			$update_estoque = "UPDATE estoque SET quantidade = '$quant_estoque' WHERE cod_item = '$codigo_produto' AND cod_deposito = $cod_deposito";
			$update = mysqli_query($link,$update_estoque);
			
			header ("Location: decisao.php");

		}else if ($status == 1){
			header ("Location: carrinho_fechado.php");

		}
	}else{
		header ("Location: sem_produto.php");
	}

	mysqli_close($link);

?>

</body>
</html>
