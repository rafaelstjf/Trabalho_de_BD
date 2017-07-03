<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>p03</title>
</head>

<body>
<?php

	date_default_timezone_set('America/Sao_Paulo');

	$hora = date("H:i:s");
	$hr = date("H");
	if($hr>=18){
		header("Location: http://localhost/php/p03/permitido.php");
	}
	else{
		header("Location: http://localhost/php/p03/negado.php");
	}

?>
</body>
</html>