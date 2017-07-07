<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>

<script type="text/javascript" src="JS/script.js"></script>

</head>
<body> 
	<form name="relatorio" method="post" action="relatorio_total_data.php">
	<table align="center" border = "1">
		<tr>
			<td>Data Inicial:</td>
			<td><input type="date" name="dataI" id="dataI"/></td>
			<td>Data Final:</td>
			<td><input type="date" name="dataF" value="dataF"></td>
		</tr>
		<tr>
			<td colspan='4' align="center"><input type="submit"  value="IR" onclick="vai();"></td>
		</tr>

		<tr>
			<td colspan="4" align="center">
				<a href="relatorio_total_sdata.php" align="center">Ver relatório sem filtro</a>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
