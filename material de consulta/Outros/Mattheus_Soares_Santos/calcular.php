<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lojas Um Click</title>
<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>

<body background="Imagens/background.jpg">
<?php
echo "<div class='a4'><p align='center' class='Samsung'><a href='index.html'><img src='Imagens/LOJA.png' width='390'/></a><br/>Carrinho de Compras</p>";
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];
$p5=$_POST["p5"];
$frete=$_POST["frete"];
$total=0;
$valor=0;
$a;
$b;
$c;
if($p1>0){
	$valor=$p1*1400;
	$a=number_format($valor,2,",",".");
	echo "<table align='center'><tr>
    	<td align='left'><img src='Imagens/1.jpg' width='125' height='125' /></td>
    	<td>Galaxy S Duos Câmera 5.0 MP Android 4.0</br>
   		Quantidade: ".$p1."</br>
   		Valor total do item: R$".$a."</td>
  		</tr></table>";
	$total=$total+($p1*1400);
}
if($p2>0){
	$valor=$p2*1100;
	$a=number_format($valor,2,",",".");
	echo "<table align='center'><tr>
    	<td align='left'><img src='Imagens/2.jpg' width='125' height='125' /></td>
    	<td>Galaxy Ace Duos Câmera 5.0 MP Android 2.3</br>
   		Quantidade: ".$p2."</br>
   		Valor total do item: R$".$a."</td>
  		</tr></table>";
	$total=$total+($p2*1100);
}
if($p3>0){
	$valor=$p3*700;
	$a=number_format($valor,2,",",".");
	echo "<table align='center'><tr>
    	<td align='left'><img src='Imagens/3.jpg' width='125' height='125' /></td>
    	<td>Galaxy Y Duos Câmera 3.2 MP Android 2.3</br>
   		Quantidade:".$p3."</br>
   		Valor total do item: R$".$a."</td>
  		</tr></table>";
	$total=$total+($p3*700);
}
if($p4>0){
	$valor=$p4*1700;
	$a=number_format($valor,2,",",".");
	echo "<table align='center'><tr>
    	<td align='left'><img src='Imagens/4.jpg' width='125' height='125' /></td>
    	<td>Galaxy S II Câmera 8.0 MP Android 2.3</br>
   		Quantidade: ".$p4."</br>
   		Valor total do item: R$".$a."</td>
  		</tr></table>";
	$total=$total+($p4*1700);
}
if($p5>0){
	$valor=$p5*2100;
	$a=number_format($valor,2,",",".");
	echo "<table align='center'><tr>
    	<td align='left'><img src='Imagens/5.jpg' width='125' height='125' /></td>
    	<td>Galaxy S III Câmera 8.0 MP Android 4.0</br>
   		Quantidade: ".$p5."</br>
   		Valor total do item: R$".$a."</td>
  		</tr></table>";
	$total=$total+($p5*2100);
}
if(($p1<=0) and ($p2<=0) and ($p3<=0) and ($p4<=0) and ($p5<=0)){
		echo "<table align='center'><tr>
		<td>Carrinho de compras vazio!</td>
		</tr>
		<tr><td align='center'><a class='as' href='compras.html'><b>Voltar</b></a></td></tr>
		</table>";
}
else{
		$total=$total+$frete;
		$b=number_format($total,2,",",".");
		$c=number_format($frete,2,",",".");
		echo "<table align='center'><tr>
		<td>Valor do frete: R$".$c."<br>	Total da compra: R$".$b."</td>
		</tr>
		</table>";
}
echo "</div>";
?>
</body>
</html>