<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>

<script type="text/javascript" src="JS/script.js"></script>

</head>
<body>



  <?php
  	$nome = $_POST['nome'];
  	$descricao = $_POST['descricao'];
  	$preco_venda = $_POST['preco_venda'];


    $cod_fornecedor = $_POST['id_fornecedor'];
    $preco_compra = $_POST['preco_compra'];
    $quantidade = $_POST['quantidade'];
    $data_compra = $_POST['data_compra'];

  	$link = mysqli_connect("localhost", "root", "", "trab");


    $query1 = "SELECT codigo FROM pedido WHERE nome = '$nome'";
    $select1 = mysqli_query($link,$query1);
    $saida = mysqli_num_rows($select1);
    $obj = mysqli_fetch_row($select1);
    $cod_produto = $obj[0];

    if ($saida == 0){
      $query2 = "INSERT INTO produto(nome, descricao, preco_venda) VALUES ('$nome', '$descricao', '$preco_venda')";
      $select2 = mysqli_query($link,$query2);

    
      $query3 = "INSERT INTO item(cod_produto, cod_fornecedor, preco_compra, quantidade, data_compra) VALUES ('$cod_produto','$cod_fornecedor','$preco_compra','$quantidade','$data_compra')";
      $insert = mysqli_query($link,$query3);
    } else if ($saida == 1){
      $query3 = "INSERT INTO item(cod_produto, cod_fornecedor, preco_compra, quantidade, data_compra) VALUES ('$cod_produto','$cod_fornecedor','$preco_compra','$quantidade','$data_compra')";
      $insert = mysqli_query($link,$query3);
    }
    $query4 = "CALL preco_sugerido(cod_produto)";
    $procedure = mysqli_query($link,$query4);

    
    mysqli_close($link);
    header ("Location: gerenciar.php");

  ?>

</body>
</html>
