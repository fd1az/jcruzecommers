<?php include('../php/config.php')?>
<?php include('index.php')?>

 <?php 
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $conexion = mysqli_connect($server,$user,"",$databesetienda);
    //Primera peticion a la base, seleccionamo los productos
    $peticion = "INSERT INTO productos VALUES (NULL,'".$_POST['nombre']."','','".$_POST['precio']."','".$_POST['peso']."','".$_POST['lon']."','".$_POST['anch']."','".$_POST['altura']."','".$_POST['stock']."','".$_POST['activado']."','')";

    //obtenemos el resultado de la consulta
    $result = mysqli_query($conexion,$peticion);
    header("Location: productos.php");