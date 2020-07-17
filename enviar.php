<?
$para = "albertoparraospina@hotmail.com";
$nombre = $_POST["nombre"];
$asunto = "Mensaje de Apo enviado por: $nombre con el correo:".$_POST["email"] .$_POST["asunto"] ;
$mensaje = $_POST["mensaje"] /* De */ .$_POST["email"];
$de = $_POST["email"];

$headers = "MIME-Version:1.0;\r\n";
$headers .= "Content-type: text/html; \r\n charset=utf-8";
$headers .= "From: $de \r\n";
$headers .= "To: $para; \r\n Subject:$asunto \r\n";

if(mail($para,$asunto,$mensaje,$headers,$nombre))
	echo header("Location: correcto.html");
else
	echo "Fallo en envio.";
	
?>