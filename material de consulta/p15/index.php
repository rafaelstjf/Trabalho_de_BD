<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loop</title>
</head>

<body>
<?PHP
	$i;
	$a;
	echo "Contagem com o FOR<br />";
	for ($i=1;$i<11;$i++)
	{
		echo $i." ";
	}
	echo "<br /><br /><br />";
	$i=1;
	echo "Contagem com o WHILE<br />";
	while($i<=10){
		echo $i." ";
		$i++;
	}
	echo "<br /><br /><br />";
	$i=1;
	echo "Contagem com o DO-WHILE<br />";
	do{
		echo $i." ";
		$i++;
	}while($i<=10);
?>
</body>
</html>