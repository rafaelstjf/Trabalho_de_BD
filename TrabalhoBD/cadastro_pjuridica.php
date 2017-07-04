<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>

<script type="text/javascript" src="JS/script.js"></script>

</head>
<body> 


	<form name="cadastrojuridico" method="post" action="cadastro_pessoa.php">


	<table align="center" border="1">
			<tr>
				<th colspan="2" align="center">Cadastro Pessoa Jurídica</th>
			</tr>
		<tbody>
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome" id="nome"/></td>
			</tr>
			<tr>
				<td>CNPJ:</td>
				<td><input type="text" name="cnpj" id="cnpj"/></td>
			</tr>
			<tr>
				<td>Login:</td>
				<td><input type="text" name="login" id="loginj"/></td>
			</tr>
			<tr>
				<td>Senha:</td>
				<td><input type="password" name="senha" id="senhaj"/></td>
			</tr>
			<tr>
				<td colspan="2">Endereço:</td>
			</tr>
			<tr>
				<td>CEP:</td>
				<td><input type="text" name="cep" id="cep"/></td>
			</tr>
			<tr>
				<td>Rua:</td>
				<td><input type="text" name="rua" id="rua"/></td>
			</tr>
			<tr>
				<td>Número:</td>
				<td><input type="text" name="num" id="num"/></td>
			</tr>
			<tr>
				<td>Complemento:</td>
				<td><input type="text" name="comp" id="comp"/></td>
			</tr>
			<tr>
				<td>Bairro:</td>
				<td><input type="text" name="bairro" id="bairro"/></td>
			</tr>
			<tr>
				<td>Cidade:</td>
				<td><input type="text" name="cidade" id="cidade"/></td>
			</tr>
			<tr>
				<td>Estado:</td>
				<td><input type="text" name="estado" id="estado"/></td>
			</tr>
	

			<input type="hidden" name="type" id="type" value="1"/>
			<tr>
				<td colspan="2" align="center"><input class="button" value="Cadastrar"  type="button"  onclick="cadastrarJ();"/></td>
			</tr>

		</tbody>
	</table>
	</form>

</body>
</html>
