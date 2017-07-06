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

  	$link = mysqli_connect("localhost", "root", "", "trab");
    $query = "INSERT INTO produto(nome, descricao, preco_venda) VALUES ('$nome', '$descricao', '$preco_venda')";
  	$select1 = mysqli_query($link,$query);
  	mysqli_close($link);
    header ("Location: gerenciar.php");

  ?>

</body>
</html>
