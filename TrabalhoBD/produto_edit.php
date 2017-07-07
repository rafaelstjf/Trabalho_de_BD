<?php 
	$link = mysqli_connect("localhost", "root", "", "trab");

	$cod_produto = $_POST['cod_produto'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco_venda = $_POST['preco_venda'];
	if($nome!=""){
		$query1 = "UPDATE produto SET nome = $nome WHERE codigo = $cod_produto";
		$update = mysqli_query($link,$query1);
	}
	if($descricao!="") {
		$query2 = "UPDATE produto SET descricao = $descricao WHERE codigo = $cod_produto";
		$update = mysqli_query($link,$query2);
	}
	if($preco_venda!="") {
		$query3 = "UPDATE produto SET preco_venda = $preco_venda WHERE codigo = $cod_produto";
		$update = mysqli_query($link,$query3);


		$query4 = "CALL preco_sugerido(cod_produto)";
    	$procedure = mysqli_query($link,$query4);

	}
	header("Location: lista_produtos2.php");
	mysqli_close($link);

?>