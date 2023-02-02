<!DOCTYPE html>
<?php
session_start();
$v_NombreCompleto = $_POST['NombreCompleto'];
$v_Telefono = $_POST['Telefono'];
$v_CorreoElectronico = $_POST['CorreoElectronico'];
$v_Usuario = $_POST['Usuario'];
$v_Clave = $_POST['Clave'];


$conn= mysqli_connect("localhost", "root", "", "proyectodb");

$sql = "INSERT INTO usuarios (NombreCompleto,Telefono,CorreoElectronico,Usuario,Clave) values ('$v_NombreCompleto','$v_Telefono','$v_CorreoElectronico','$v_Usuario','$v_Clave') ";

if (mysqli_query($conn, $sql)) {
	header('location:../HTML/r-index.html');
}else {
	echo "Error: " . $sql . "<br>"  . mysqli_error($conn);
}
mysqli_close($conn);


?>
</html>