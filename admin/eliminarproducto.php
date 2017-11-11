<?php include('../php/config.php')?>
<?php include('index.php')?>

 <?php 
   
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $conexion = mysqli_connect($server,$user,"",$databesetienda);
    //Primera peticion a la base, seleccionamo los productos
    $peticion = "DELETE FROM productos WHERE id =".$_GET['id']."";
    $result = mysqli_query($conexion,$peticion);

    header("Location: productos.php");