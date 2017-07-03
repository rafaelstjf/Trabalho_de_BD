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

	
	$consulta= mysql_query("SELECT origem, destino, nomeCliente FROM reservas ORDER BY origem, destino, nomeCliente",$conexao);
	
	echo "<table class='admin' width='500px'>
		<tr class='tituloadmin'>
			<td colspan='3' align='center'>Relatório de reservas:</td>
		</tr>
		<tr align='center'center' class='links'>	
			<td><a href='bh_rj.php'>BH - RJ</a></td>
			<td><a href='rj_bh.php'>RJ - BH</a></td>
			<td><a href='sp_bh.php'>SP - BH</a></td>
		</tr>		
		<tr align='center'center' class='links'>	
			<td><a href='bh_sp.php'>BH - SP</a></td>	
			<td><a href='rj_sp.php'>RJ - SP</a></td>	
			<td><a href='sp_rj.php'>SP - RJ</a></td>
		</tr>
		<tr class='tituloadmin'>
			<td colspan='3' align='center' class='links'><a href='index.html'>Voltar</a></td>
		</tr>		
		</table>";
		
	
	
	mysql_close($conexao);
?>
</body>
</html>