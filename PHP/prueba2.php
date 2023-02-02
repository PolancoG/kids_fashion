<!DOCTYPE html>
<?php
session_start();

$v_NombreCompleto = $_POST['NombreCompleto'];
$v_Telefono = $_POST['Telefono'];
$v_CorreoElectronico = $_POST['CorreoElectronico'];
$v_Usuario = $_POST['Usuario'];
$v_Clave = $_POST['Clave'];

echo $v_NombreCompleto;
echo $v_Telefono;
echo $v_CorreoElectronico;
echo $v_Usuario;
echo $v_Clave;

$conn= mysqli_connect("localhost", "root", "", "proyectodb");
echo $conn;
?>
</html>