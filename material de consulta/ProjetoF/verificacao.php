<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>VoeBem Linhas Aéreas S/A</title>
    <link rel="icon" type="image/png" href="Imagens/icone.png"/>
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
    <script src="JS/script.js"></script>
</head>

<body>
<?php	
	$login=$_POST["nomeP"];
	$senha=$_POST["senhaP"];
	$conexao = mysql_connect("127.0.0.1","root","");
	mysql_select_db("pfinal",$conexao);
	if (($login=="admin") and ($senha=="123")){
		header ("Location: http://localhost/ProjetoF/mostrar_reservas.php");
	}else{

		$consultaSQL = mysql_query("SELECT login,senha FROM clientes WHERE login='$login' AND senha='$senha'",$conexao);
		$saida=mysql_num_rows($consultaSQL);
		if ($saida==1){
			header ("Location: http://localhost/ProjetoF/promocao.php?login=$login");
		}
		else{
			header ("Location: http://localhost/ProjetoF/erro.html");

		}
		
		mysql_close($conexao);
	
	}
?>
</body>
</html>