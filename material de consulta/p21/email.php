<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMAIL</title>
</head>

<body>
<?php
	ini_set("display_errors","0");
	$destinatario=$_POST["destinatario"];
	$assunto=$_POST["assunto"];
	$mensagem=$_POST["mensagem"];

	$headers="From: WebMaster <webmaster@mattheus.netii.net>";
	
	if (($destinatario!="")and($assunto!="")and($mensagem!="")){
		$envio=mail($destinatario,$assunto,$mensagem,$headers);
		echo "Mensagem enviada com sucesso!";
		echo "<br />Destinatário: $destinatario<br />Assunto: $assunto<br />Mensagem: $mensagem";
	}else{
		echo "Ocorreu um erro. Verifique se os campos foram devidament preenchidos e tente novamente.";
	}
?>
</body>
</html> 