<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>VoeBem Linhas Aéreas S/A</title>
    <link rel="icon" type="image/png" href="Imagens/icone.png"/>
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
    <script src="JS/script.js"></script>
</head>

<body>
<?php
	$login=$_GET["login"];
	echo "<form name='cadastro' method='post' action='cadastro_promocao.php?login=$login'>";
?>
	<div class="logo"><a href="index.html"><img src="Imagens/logo.png" alt="Voe Bem Linhas Aéreas" height="150" width="600"/></a></div>
	<div class="promocao">
    	<table align="center">
        	<tr>
            	<td align="center">A empresa que te deixa nas nuvens</td>
            </tr>
        </table>
    </div>
    <div class="login">
    	<form name="cadastro" method="post" action="cadastro_promocao.php">
        <table class="textocadastro" cellpadding="6" align="center" >
        	<tr>
            	<td colspan="2" align="center">Estamos oferecendo vôos gratuitos para clientes cadastrados!<br />Basta escolher sua origem e destino!</td>
            </tr>
            <tr>
            	<td class="textocadastro" align="right">Origem:</td>
                <td align="left"><select class="opcao" id="origemS" name="origemP">
        				<option value="BH">BH</option>
        				<option value="RJ">RJ</option>
                        <option value="SP">SP</option>
                	</select></td>
            </tr>
            <tr>
            	<td align="right">Destino:</td>
                <td align="left"><select class="opcao" id="destinoS" name="destinoP">
        				<option value="BH">BH</option>
        				<option value="RJ">RJ</option>
                        <option value="SP">SP</option>
                	</select></td>
            </tr>
            <tr>
            	<td colspan="2" align="center"><input class="botaocadastro" type="button" value="Cadastrar" onclick="validar2();"/></td>
            </tr>
        </table>
        </form>
	</div>
</body>
</html>