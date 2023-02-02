<!DOCTYPE html>
<?php
session_start();
$v_tipo = $_POST['tipodeproductos'];
$v_NombredelProducto= $_POST['Nombredelproducto'];
$v_CodigoInterno = $_POST['CodigoInterno'];
$v_CodigodeBarra = $_POST['CodigodeBarra'];
$v_Categoria = $_POST['Categoria'];
$v_Marca = $_POST['Marca'];
$v_PreciodeEntrada = $_POST['PreciodeEntrada'];
$v_PreciodeSalida = $_POST['PreciodeSalida'];
$v_Unidad = $_POST['Unidad'];
$v_Peso = $_POST['Peso'];
$v_Descripcion = $_POST['Descripcion'];
$v_Foto = $_POST['Foto'];


$conn= mysqli_connect("localhost", "root", "", "proyectodb");

$sql = "INSERT INTO productos (tipodeproductos,NombredelProducto,CodigoInterno,CodigodeBarra,Categoria,Marca,PreciodeEntrada,PreciodeSalida,Unidad,Peso,Descripcion,Foto) values ('$v_tipodeproductos','$v_Nombredelproducto','$v_CodigoInterno','$v_CodigodeBarra','$v_Categoria','$v_Marca','$v_PreciodeEntrada','$v_PreciodeSalida','$v_unidad','$v_Peso','$v_Descripcion','$v_Foto') ";

if (mysqli_query($conn, $sql)) {
	header('location: ../HTML/productos-index.html');
}else {
	echo "Error: ". $sql ."<br>". mysqli_error($conn);
}
mysqli_close($conn);


?>
</html>