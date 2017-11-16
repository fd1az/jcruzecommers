<?php include('../php/config.php')?>
<?php include('index.php')?>

 <?php 
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $conexion = mysqli_connect($server,$user,"",$databesetienda);
    //Primera peticion a la base, seleccionamo los productos
    $peticion = " UPDATE productos SET 
    nombre = '".$_POST['nombre']."',
    precio ='".$_POST['precio']."',
    peso = '".$_POST['peso']."', 
    lon = '".$_POST['lon']."', 
    anch= '".$_POST['anch']."',
    altura='".$_POST['altura']."', 
    stock='".$_POST['stock']."',
    activado = '".$_POST['activado']."'
    WHERE id='".$_GET['id']."' ";

    //obtenemos el resultado de la consulta
    $result = mysqli_query($conexion,$peticion);
    header("Location: productos.php");