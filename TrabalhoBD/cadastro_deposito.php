 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>

<script type="text/javascript" src="JS/script.js"></script>

</head>
<body>

  <form name="cadastrodeposito" method="post" action="insert_deposito.php">


  <table align="center" border="1">
      <tr>
        <th colspan="2" align="center">Cadastro Depósito</th>
      </tr>
    <tbody>
      <tr>
        <td>Nome:</td>
        <td><input type="text" name="nome" id="nome"/></td>
      </tr>

      
     <tr>
        <td>Endereço:</td>
        <td><select name="id_endereco" id="id_endereco">
        <?php 
        $link = mysqli_connect("localhost", "root", "", "trab");
        $query = "SELECT codigo, CEP FROM endereco";
        $consultaSQL = mysqli_query($link,$query);
        while($row = mysqli_fetch_row($consultaSQL)){
          echo "<option value=".$row[0].">".$row[1]."</option>";
        }
        mysqli_close($link);
        ?> 
          </select>
        </td>
      </tr>

        <td align="center" colspan="2">
          <input class="button" value="Cadastrar"  type="submit"  onclick="cadastrarDepo();"/>
          <input class="button" value="Voltar"  type="button" onclick="goBack();"/>
        </td>
      </tr>

    </tbody>
  </table>
  </form>

</body>
</html>
