<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>

<script type="text/javascript" src="JS/script.js"></script>

</head>
<body> 


	<form name="login" method="post" action="validar.php">


	<table align="center" border="1">
			<tr>
				<th colspan="2" align="center">Login</th>
			</tr>
		<tbody>
			<tr>
				<td>Login:</td>
				<td><input type="text" name="login" id="user"/></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input type="password" name="senha" id="pass"/></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input value="Login"  type="button"  onclick="validar();"/></td>
			</tr>
 			<tr>
				<td colspan="2" align="center">Não tem login? <a href="cadastrar.php">Cadastre-se!</a></td>
			</tr>
		</tbody>
	</table>
	</form>

</body>
</html>
