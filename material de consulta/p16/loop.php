<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crie seu próprio loop!!</title>
<link rel="icon" type="image/png" href="Imagens/arrow_circle_right.png" />
<link rel="stylesheet" type="text/css" href="Style/style.css"/>
</head>

<body>
<?PHP
	$start=$_POST["inicio"];
	$end=$_POST["fim"];
	$plus=$_POST["passo"];
	$type=$_POST["metodo"];
	$window="";

	if($type==1){
			if($start<=$end){
				for($i=$start;$i<=$end;$i=$i+$plus)	$window=$window."$i ";
			}
			if($start>=$end){
				for($i=$start;$i>=$end;$i=$i-$plus)	$window=$window."$i ";
			}
	}
	if($type==2){
			if($start<=$end){
				$i=$start;
				while($i<=$end){
					$window=$window."$i ";
					$i=$i+$plus;
				}
			}
			if($start>=$end){
				$i=$start;
				while($i>=$end){
					$window=$window."$i ";
					$i=$i-$plus;
				}
			}	
	}
	if($type==3){
			if($start<=$end){
				$i=$start;
				do{
					$window=$window."$i ";
					$i=$i+$plus;
				}while($i<=$end);
			}
			if($start>=$end){
				$i=$start;
				do{
					$window=$window."$i ";
					$i=$i-$plus;
				}while($i>=$end);
			}
	}
	echo "<table><tr><td align='center'>".$window."</td></tr></table>";
?>
</body>
</html>