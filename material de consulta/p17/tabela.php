<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tabela Dinâminca</title>
</head>

<body>
<?PHP
	$i=0;
	$j=$_POST["linhas"];
	$x=0;
#	$y=$_POST["colunas"];
	$valor1=0;
	$valor2=0;
	$result=0;
	echo "<table align='center' cellspacing='5' cellpadding='5' border='1'>";
	for ($i=1;$i<=$j;$i++){
		$valor1=rand(1,99);
		$valor2=rand(1,99);
		$result=$valor1+$valor2;
		echo "<tr>";
		if($i%2==0){
			echo "<td bgcolor='#DDDDDD'>".$valor1."</td>";
			echo "<td bgcolor='#DDDDDD'>".$valor2."</td>";
			echo "<td bgcolor='#DDDDDD'>".$result."</td>";			
		}else{
			echo "<td>".$valor1."</td>";
			echo "<td>".$valor2."</td>";
			echo "<td>".$result."</td>";	
		}
/*			for ($x=1;$x<=$y;$x++){
				if($i%2==0){
					echo "<td bgcolor='#DDDDDD'>Coluna".$x."<br />Linha".$i."</td>";
				}
				else{
					echo "<td>Coluna".$x."<br />Linha".$i."</td>";
				}
			}	*/
		echo "</tr>";
	}
	echo "</table>";
?>
</body>
</html>