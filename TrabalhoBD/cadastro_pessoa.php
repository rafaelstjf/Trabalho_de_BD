<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>

<script type="text/javascript" src="JS/script.js"></script>

</head>
<body> 



<?php 
	$tipo = $_POST['type'];
	echo $tipo;
	if ($tipo == 0) echo " - LOGIN PESSOA FÍSICA";
	else if($tipo == 1) echo " - LOGIN PESSOA JURÍDICA";

	$cep = $_POST['cep'];
	$num = $_POST ['num'];
	$comp = $_POST['comp'];
	$id_endereco = $cep.$num.$comp;

	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$id_regiao = $cidade.$estado;
	echo " ".$id_endereco;
	


	$link = mysqli_connect("localhost", "root", "", "trab");
	$query = "SELECT codigo FROM regiao WHERE cidade = '$cidade' AND estado = '$estado' ";
	$consultaSQL = mysqli_query($link,$query);
	$saida = mysqli_num_rows($consultaSQL);

	if($saida == 0){
		$query_regiao = "INSERT INTO regiao (cidade,estado) VALUES ('$cidade','$estado')";
	}else if ($saida == 1){
		







	}

	mysqli_close($link);

?>

</body>
</html>
