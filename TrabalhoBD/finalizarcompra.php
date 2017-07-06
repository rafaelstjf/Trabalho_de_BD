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


	$q1 = "SELECT cod_endereco FROM pessoa WHERE (codigo = '$codigo_login')";
	$s1 = mysqli_query($link,$q1);
	$cod_endereco = -1;
	echo $codigo_login;
	while($obj1 = mysqli_fetch_row($s1))
	{
		$cod_endereco = $obj1[0];
	}

	
	if($cod_endereco == -1)
	{
		echo "Erro: sem endereço";
	}

	$q2 = "SELECT codigo FROM deposito WHERE cod_endereco = '$cod_endereco'";
	$s2 = mysqli_query($link,$q2);
	$obj2 = mysqli_fetch_row($s2);
	$cod_deposito = $obj2[0];

		
	$q3 = "SELECT quantidade, cod_deposito FROM estoque WHERE cod_item = '$codigo_produto'";
	$s3 = mysqli_query($link,$q3);

	$cod_dep_sel = -1;
	$quant_estoque = 0;
	while($row = mysqli_fetch_row($s3)){
		$quant_dep = $row[0];
		if($quant_dep >= $qnt)
		{
			if($cod_dep_sel != $cod_deposito)
			{
				$cod_dep_sel = $row[1];
				$quant_estoque = $row[0];
			}
		}
	}

	if($cod_dep_sel != -1)
	{
		$cod_deposito = $cod_dep_sel;
	}


	$q4 = "SELECT cod_pedido, status FROM pedido WHERE (cod_cliente = '$codigo_login')";
	$s4 = mysqli_query($link,$q4);
	$cod_pedido = -1;
	while($obj4 = mysqli_fetch_row($s4))
	{
		// Se tiver um pedido como carrinho, use ele
		if($obj4[1] == 0)
		{
			$cod_pedido = $obj4[0];
		}
	}

	if($cod_pedido == -1)
	{
		$date = date("d-m-Y");

		$notaf = rand(0,9223372036854775807);

		$q5 = "INSERT INTO pedido (cod_cliente, valor_total, data_pedido, status, nota_fiscal) VALUES ('$codigo_login', '0.0', '$date', '0', '$notaf');";
		$s5 = mysqli_query($link,$q5);

		$q6 = "SELECT cod_pedido, status FROM pedido WHERE (cod_cliente = '$codigo_login')";
		$s6 = mysqli_query($link,$q6);

		while($obj5 = mysqli_fetch_row($s6))
		{
			$cod_pedido = $obj5[0];
		}
	}

	echo "Pedido:".$cod_pedido;
	$status = 0;

	if($quant_estoque >= $qnt){
		if ($status == 0){

			$preco=$_POST['preco'];
			$preco = intval($preco);

			$total = $qnt*$preco;

			$d = date('d');
			$m = date('m');
			$y = date('Y');

			$notaf = rand(0,9223372036854775807);

			$insert_pedido = "UPDATE pedido SET valor_total = (valor_total + '$total'), data_pedido = (STR_TO_DATE('$y,$m,$d','%Y,%m,%d')), nota_fiscal = ('$notaf')  WHERE  cod_cliente = '$codigo_login'";
			$ins_p = mysqli_query($link,$insert_pedido);


			$insert_itens_pedido = "INSERT INTO comp_pedido (cod_pedido,cod_item,cod_cliente,valor_venda,quantidade) VALUES ('$cod_pedido','$codigo_produto','$codigo_login','$preco','$qnt')";
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
