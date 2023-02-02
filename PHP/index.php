<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>envio</title>
	<link rel="stylesheet" type="text/css" href="../CSS/envio.css">
</head>
<body>
     <form method="post">
     	<input type="text" placeholder="name" name="name" required="">
     	<input type="text" placeholder="email" name="email"required="">
     	<input type="text" placeholder="asunto" name="asunto"required="">
     	<textarea placeholder="mensaje" name="msg"></textarea>
     	<input type="submit" name="Enviar">
     	


     </form>

<?php
include("correo.php");	
?>
</body>
</html>