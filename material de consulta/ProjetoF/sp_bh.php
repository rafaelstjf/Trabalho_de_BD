<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>VoeBem Linhas Aéreas S/A</title>
<link rel="icon" type="image/png" href="Imagens/icone.png"/>
<link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
</head>

<body>
	<div class="logo"><a href="index.html"><img src="Imagens/logo.png" alt="Voe Bem Linhas Aéreas" height="150" width="600"/></a></div>
	<div class="promocao">
    	<table align="center">
        	<tr>
            	<td align="center">A empresa que te deixa nas nuvens</td>
            </tr>
        </table>
    </div>
<?php

	
	$conexao = mysql_connect("127.0.0.1","root","");
	mysql_select_db("pfinal",$conexao);

	$consulta= mysql_query("SELECT nomeCliente FROM reservas WHERE origem='SP' AND destino='BH' ORDER BY nomeCliente",$conexao);

	$saida=mysql_num_rows($consulta);
	
	if($saida>0){	
	echo "<table class='admin' width='500px'>
		<tr class='tituloadmin'>
			<td colspan='2' align='center'>Relatório de reservas:</td>
		</tr>		
		<tr class='tituloadmin'>
			<td align='center'>Origem: SP</td>
			<td align='center'>Destino: BH</td>
		</tr>
		<tr align='center' class='tituloadmin'>	
			<td colspan='2'>Reservas:</td>
		</tr>";

	while($linha=mysql_fetch_row($consulta)){
		echo "<tr class='tadim' align='center'>";
		for($i=0; $i<mysql_num_fields($consulta); $i++){
			echo "<td colspan='2'>".$linha[$i]."</td>";
		}
		echo "</tr>";
	}
	}
	else{

	echo "<table class='admin' width='500px'>
		<tr class='tituloadmin'>
			<td colspan='2' align='center'>Relatório de reservas:</td>
		</tr>		
		<tr class='tituloadmin'>
			<td align='center'>Origem: SP</td>
			<td align='center'>Destino: BH</td>
		</tr>
		<tr align='center' class='tituloadmin'>	
			<td colspan='2'>Reservas:</td>
		</tr>
		<tr align='center' class='tituloadmin'>	
			<td colspan='2'>Não existem reservas realizadas nesse vôo</td>
		</tr>";
	}
	echo "<tr align='center' class='tituloadmin'>	
			<td colspan='2' class='links'><a href='mostrar_reservas.php'>Voltar</a></td>
		</tr></table>";	
	
	
	mysql_close($conexao);
?>
</html>