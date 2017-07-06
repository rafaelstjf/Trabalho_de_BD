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


    $query1 = "SELECT codigo FROM produto WHERE nome = '$nome'";
    $select1 = mysqli_query($link,$query1);
    $saida = mysqli_num_rows($select1);
    $obj = mysqli_fetch_row($select1);
    $cod_produto = $obj[0];

    if ($saida == 0){
      $query2 = "INSERT INTO produto(nome, descricao, preco_venda) VALUES ('$nome', '$descricao', '$preco_venda')";
      $select2 = mysqli_query($link,$query2);

    
      $query3 = "INSERT INTO item(cod_produto, cod_fornecedor, preco_compra, quantidade, data_compra) VALUES ('$cod_produto','$cod_fornecedor','$preco_compra','$quantidade','$data_compra')";
      $insert1 = mysqli_query($link,$query3);

    } else if ($saida == 1){

      $query4 = "SELECT cod_fornecedor FROM item WHERE cod_fornecedor = '$cod_fornecedor'";
      $select3 = mysqli_query($link,$query4);
      $saida2 = mysqli_fetch_row($select3);

      if ($saida2 == 0){
        $query5 = "INSERT INTO item(cod_produto, cod_fornecedor, preco_compra, quantidade, data_compra) VALUES ('$cod_produto','$cod_fornecedor','$preco_compra','$quantidade','$data_compra')";
        $insert2 = mysqli_query($link,$query3);

      }else if ($saida2 == 1){
        $query6 = "SELECT quantidade FROM item WHERE cod_produto = '$cod_produto' AND cod_fornecedor = '$cod_fornecedor'";
        $select6 = mysqli_query($link,$query6);
        $obj6 = mysqli_fetch_row($select6);
        $qnt = $obj6[0];
        $quant = $quantidade + $qnt;


        $query7 = "UPDATE item SET quantidade = '$quant' WHERE cod_produto = '$cod_produto' AND cod_fornecedor = '$cod_fornecedor'";
        $update = mysqli_query($link,$query7);
      }

    }




    $query8 = "CALL preco_sugerido(cod_produto)";
    $procedure = mysqli_query($link,$query4);



    $query9 = "SELECT cod_endereco FROM pessoa WHERE codigo='$cod_fornecedor' ";
    $select9 = mysqli_query($link,$query9);
    $obj9 = mysqli_fetch_row($select9);
    $cod_endereco = $obj9[0];

    $query10 = "SELECT codigo FROM deposito WHERE cod_endereco = '$cod_endereco'";
    $select10 = mysqli_query($link,$query10);
    $saida10 = mysqli_num_rows($select10);
    

    if($saida10 == 0){
      header("Location: deposito_nexiste.php");
    }else if ($saida10 == 1){
        $obj10 = mysqli_fetch_row($select10);
        $cod_deposito = $obj10[0];
    }

    $query11 = "SELECT codigo FROM item WHERE cod_produto = '$cod_produto' AND cod_fornecedor = '$cod_fornecedor'";
    $select11 = mysqli_query($link,$query11);
    $obj11 = mysqli_fetch_row($select11);
    $cod_item = $obj11[0];


    $query12 = "SELECT quantidade FROM estoque WHERE cod_item=$cod_item AND cod_deposito=$cod_deposito";
    $select12 = mysqli_query($link,$query12);
    $saida12 = mysqli_num_rows($select12);


    if($saida12 == 0){
        $query13 = "INSERT INTO estoque (cod_item,cod_deposito,quantidade) VALUES ('$cod_item','$cod_deposito','$quantidade')";
        $insert13 = mysqli_query($link,$query13);
    }else if ($saida12 == 1){

        $obj12 = mysqli_fetch_row($select12);
        $quant_estoq = $obj12[0];
        $q = $quantidade + $quant_estoq;
        $query13 = "UPDATE estoque SET cod_item = '$cod_item',cod_deposito = '$cod_deposito',quantidade = '$q'";
        $insert13 = mysqli_query($link,$query13);
    }





    
    mysqli_close($link);
    header ("Location: gerenciar.php");

  ?>

</body>
</html>
