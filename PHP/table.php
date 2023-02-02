<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/table.css">

    <link rel="stylesheet" href="../CSS/bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Pagina de panel de Administracion</title>
</head>
<body>

    <!-----Casilla de verificacion-->
    <input type="checkbox" id="checkbox">
    <!----Inicio del Encabezado-->
    <header class="header">
    <h2 class="u-name">Panel de Control<b>Administradora<b>Marian Piñeyro</b>
    <label for="checkbox">
    <!---Iconos de Aplicaciones Font-Awesome-->
    <i id="navbar" class="fa fa-bars" aria-hidden="true"></i>

    </label>
    </h2>
    </header>
    <!----Fin del Encabezado----->

<!----Agregue una tabla a un documento---->
    <div class="body">
<!--- Barra lateral Izquierda---------->
    <nav class="side-bar-left">
<!---- Imagen del perfil------>
    <div class="user-p">
    <img src="../IMAGENES/Perfil.jpeg" alt="imagen del perfil" class="perfil">
    </div>


    <ul>
<!------Dashboard-->


    <li>
<a href="../HTML/panel.html">
<i class="fa fa-dashboard"></i>
<span>Dashboard</span>

</a>
    </li>

<!----------Configuracion---->

    <li>
        <a href="">
        <i class="fa fa-cog"></i>
        <span>Configuracion</span>

        </a>
            </li>

<!----------table---->

<li>
    <a href="">
    <i class="fa fa-table"></i>
    <span>Usuarios</span>

    </a>
        </li>



            <li>
    <a href="">
    <i class="fa fa-table"></i>
    <span>Productos</span>

    </a>
        </li>

        <!----------Salir---->

    <li>
        <a href="">
        <i class="fa fa-power-off"></i>
        <span>Salir</span>

        </a>
            </li>


    <!----User-->

    <li>
        <a href="">
        <i class="fa fa-user"></i>
        <span>Perfil</span>

        </a>
            </li>






    </ul>

    </nav>

<section class="section-1">
<!---- Estableciendo una conexion a la base de datos---->
<?php 

$conn=mysqli_connect("localhost","root","","proyectodb");

$por_pagina=15;
if(isset($_GET['pagina']))
$pagina=$_GET['pagina'];

else 
{

    $pagina=1;
}


$empieza=($pagina-1) * $por_pagina;
$query="SELECT * FROM usuarios LIMIT $empieza,$por_pagina";
$result=mysqli_query($conn,$query);

?>


<table class="table table-border table-striped table-hover">
<tr>
<td>idusuario</td>
<td>NombreCompleto</td>
<td>Telefono</td>
<td>CorreoElectronico</td>
<td>Usuario</td>
<td>Clave</td>

</tr>

<?php 

while($fila=mysqli_fetch_assoc($result))
{

?>

<tr>
<td><?php echo $fila['idusuario'];?></td>
<td><?php echo $fila['NombreCompleto'];?></td>
<td><?php echo $fila['Telefono'];?></td>
<td><?php echo $fila['CorreoElectronico'];?></td>
<td><?php echo $fila['Usuario'];?></td>
<td><?php echo $fila['Clave'];?></td>

</tr>

<?php 
}

?>


</table>

<?php 

$query="SELECT * FROM usuarios ";
$result=mysqli_query($conn,$query);

$total_registros=mysqli_num_rows($result);
$total_paginas=ceil($total_registros/$por_pagina);

echo"<center><a class='paginacion' href='../PHP/table.php?pagina=1'>" .'Anterior'. "</a>";

for($i=1; $i<=$total_paginas; $i++)

{

echo"<a class='paginacion' href='../HTML/table.php?pagina=".$i."'> ".$i."</a>";

}

echo"<a class='paginacion' href='../HTML/table.php?pagina=$total_paginas'>" .'Siguiente'."</a> </center>";


?>








</section>

    </div>














</body>
</html>