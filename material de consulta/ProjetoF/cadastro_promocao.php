<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>VoeBem Linhas Aéreas S/A</title>
<link rel="icon" type="image/png" href="Imagens/icone.png"/>
<link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
</head>

<body>
<?php
	$login=$_GET["login"];
	$origem=$_POST["origemP"];
	$destino=$_POST["destinoP"];

	$conexao = mysql_connect("127.0.0.1","root","");
	mysql_select_db("pfinal",$conexao);

	$consulta = mysql_query("select nomecliente from reservas where nomecliente=(select nomecliente from clientes where login='$login')",$conexao);
	
	$consultaSQL = mysql_query("SELECT origem, destino FROM reservas WHERE origem='$origem' and destino='$destino'",$conexao);
	
	$cliente_nome = mysql_query("select nomecliente from clientes where login='$login'",$conexao);
	
	
	$nome = mysql_fetch_row($cliente_nome);	
	

	
	$saida1=mysql_num_rows($consulta);
	
	$saida2=mysql_num_rows($consultaSQL);

echo"<div class='logo'><a href='index.html'><img src='Imagens/logo.png' alt='Voe Bem Linhas Aéreas' height='150' width='600'/></a></div>
		<div class='promocao'>
    		<table align='center'>
        		<tr>
            		<td align='center'>A empresa que te deixa nas nuvens</td>
           	 </tr>
        	</table>
    	</div>";
echo "<div class='login'>";
	
	if($saida1==1){		
		echo "<p align='center'><br>Esta conta de cliente já está cadastrada!</p>";		
	}else{
			if($saida2==5){
				echo "<p align='center'><br>A promoção já se esgotou com essa origem e esse destino!</p>";
			}else{
				$cadastro_promocao = mysql_query ("INSERT INTO reservas(origem, destino, nomeCliente) VALUES('$origem','$destino','$nome[0]')");
				echo "<p align='center'><br><br>Cadastro realizado com sucesso!</p>";
			}
	}
	
	echo "<p align='center'><a class='links' href='index.html'><br>Clique aqui para voltar para página principal</a></p>";
	echo "</div>";
	mysql_close($conexao);
?>
</body>
</html>