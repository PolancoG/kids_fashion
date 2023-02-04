<?php
session_start();
$v_user = $_POST['user'];
$v_clave = $_POST['clave'];


$conn = mysqli_connect("localhost", "root", "", "proyectodb");
$consulta = mysqli_query ($conn, "SELECT * FROM usuarios WHERE usuario = '$v_user' AND clave = '$v_clave'");

if(!$consulta){

echo mysqli_error($mysqli);

exit;
}

if($v_user = mysqli_fetch_assoc($consulta)){

		header("location: ../HTML/index.html");
}
else
{
  	header("location: ../HTML/cancelado.html");
}
?>
