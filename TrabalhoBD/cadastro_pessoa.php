<?php 
	$tipo = $_POST['type'];
	$telefone = $_POST['telefone'];
	
	$nome = $_POST['nome'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];

	$cep = $_POST['cep'];
	$num = $_POST ['num'];
	$comp = $_POST['comp'];


	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];

	


	$link = mysqli_connect("localhost", "root", "", "trab");
	$query1 = "SELECT codigo FROM regiao WHERE cidade = '$cidade' AND estado = '$estado' ";
	$query2 = "SELECT codigo FROM endereco WHERE cep = '$cep' AND numero = '$num' AND complemento = '$comp'";

	$select1 = mysqli_query($link,$query1);
	$select2 = mysqli_query($link,$query2);


	$saida1 = mysqli_num_rows($select1);
	$saida2 = mysqli_num_rows($select2);


	if($saida1 == 0){
		$query_regiao = "INSERT INTO regiao (cidade,estado) VALUES ('$cidade','$estado')";
        $insert_regiao = mysqli_query($link,$query_regiao);
	}

	$select1 = mysqli_query($link,$query1);
	$obj1 = mysqli_fetch_row($select1);
	$codigo_regiao = $obj1[0];


	if($saida2 == 0){
		$query_endereco = "INSERT INTO endereco (cep,numero,rua,bairro,complemento,cod_regiao) VALUES ('$cep','$num','$rua','$bairro','$comp','$codigo_regiao')";
		$insert_endereco = mysqli_query($link,$query_endereco);
	}

	$select2 = mysqli_query($link,$query2);
	$obj2 = mysqli_fetch_row($select2);
	$codigo_endereco = $obj2[0];
	

	if(($tipo == 0)||($tipo == 2)){
		$cpf = $_POST['cpf'];

		$insert_pessoa= "INSERT INTO pessoa (cpf,tipo,cod_endereco,nome,email,senha) VALUES ('$cpf', '$tipo','$codigo_endereco','$nome','$login','$senha')";
		
	}else if($tipo == 1){
		$cnpj = $_POST['cnpj'];

		$insert_pessoa= "INSERT INTO pessoa (cnpj,tipo,cod_endereco,nome,email,senha) VALUES ('$cnpj', '$tipo','$codigo_endereco','$nome','$login','$senha')";
	}

	$cadastro_pessoa = mysqli_query($link,$insert_pessoa);
	

	$query3 = "SELECT codigo from pessoa WHERE nome = $nome AND cod_endereco = $codigo_endereco";
	$select3 = mysqli_query($link,$query3);
	$s3 = mysqli_fetch_row($select3);
	$cod_pessoa = $s3[0];


	$tel = "INSERT INTO telefone (cod_pessoa,numero) VALUES ('$cod_pessoa','$telefone')";

	$cadastro_tel = mysqli_query($link,$tel);

	mysqli_close($link);
	if($tipo == 0) header ("Location: index.php");
	else if($tipo == 2)  header ("Location: gerenciar.php");

?>