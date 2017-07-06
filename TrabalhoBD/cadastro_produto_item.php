<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabalho de Banco de Dados</title>

<script type="text/javascript" src="JS/script.js"></script>

</head>
<body>

  <form name="cadastroproduto" method="post" action="insert_produto.php">


  <table align="center" border="1">
      <tr>
        <th colspan="2" align="center">Cadastro Produto - Item</th>
      </tr>
    <tbody>
      <tr>
        <td>Nome:</td>
        <td><input type="text" name="nome" id="nome"/></td>
      </tr>
      <tr>
        <td>Descrição:</td>
        <td><input type="text" name="descricao" id="descricao"/></td>
      </tr>
      <tr>
        <td>Preço de venda:</td>
        <td><input type="number" min = "0.01" name="preco_venda" id="preco_venda"/></td>
      </tr>
      
      <tr>
        <td>Fornecedor:</td>
        <td><select name="id_fornecedor" id="id_fornecedor">
        <?php 
        $link = mysqli_connect("localhost", "root", "", "trab");
        $query = "SELECT codigo, nome FROM pessoa WHERE tipo=1";
        $consultaSQL = mysqli_query($link,$query);
        while($row = mysqli_fetch_row($consultaSQL)){
          echo "<option value=".$row[0].">".$row[1]."</option>";
        }
        mysqli_close($link);
        ?> 
          </select>
        </td>
      </tr>

      <tr>
        <td>Preço de Compra:</td>
        <td><input type="text" min = "0.01" name="preco_compra" id="preco_compra"/></td>
      </tr>
      <tr>
        <td>Quantidade:</td>
        <td><input type="number" min = "1" name="quantidade" id="quantidade"/></td>
      </tr>      
      <tr>
        <td>Data de Compra:</td>
        <td><input type="date"  name="data_compra" id="data_compra"/></td>
      </tr>

        <td align="center" colspan="2">
          <input class="button" value="Cadastrar"  type="submit"  onclick="cadastrarProd();"/>
          <input class="button" value="Voltar"  type="button" onclick="goBack();"/>
        </td>
      </tr>

    </tbody>
  </table>
  </form>

</body>
</html>
