<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validando Conta...</title>
</head>

<body>
<?php
$nome=$_POST["userP"];
$senha=$_POST["passP"];

if($nome=="user" and $senha=="1234"){
	header("Location: http://localhost/02-P.I/p13/compras.html");
}else{
	header("Location: http://localhost/02-P.I/p13/error.html");
}
?>
</body>
</html>