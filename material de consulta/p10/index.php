<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="1" />
<title>p02</title>
<style>
p{
	font-style:italic;
	color:#FFF;
	font-family:"Times New Roman", Times, serif;
	font-size:30px;
}
</style>
</head>

<body bgcolor="#003366">

<?php

date_default_timezone_set('America/Sao_Paulo');

	$data = date("d/m/y");
	$hora = date("H:i:s");
	$hr = date("H");
	echo "<p align='center'> Hora atual: ".$data."</p>";
	echo "<p align='center'> Olá, hoje é dia: ".$hora."h</p>";
	if (($hr>=0) and ($hr<12)){
		echo "<p align='center'>Bom dia!</p>";
	}
	if (($hr>=12) and ($hr<18)){
		echo "<p align='center'>Boa tarde!</p>";
	}
	if (($hr>=18) and ($hr<=24)){
		echo "<p align='center'>Boa noite!</p>";
	}


?>

</body>
</html>