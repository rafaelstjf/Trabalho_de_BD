<?php 
  	$nome = $_POST['nome'];
  	$cod_endereco = $_POST['id_endereco'];

  	$link = mysqli_connect("localhost", "root", "", "trab");
  	$query = "INSERT INTO deposito (cod_endereco,nome) VALUES ('$cod_endereco','$nome')";
	$consultaSQL = mysqli_query($link,$query);

    
    mysqli_close($link);
    header ("Location: gerenciar.php");
?>