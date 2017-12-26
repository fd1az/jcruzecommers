<?php include('../php/config.php')?>
<?php include('index.php')?>

 <?php 
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $conexion = mysqli_connect($server,$user,"",$databesetienda);
    //Primera peticion a la base, seleccionamo los productos
    $peticion = "INSERT INTO clientes VALUES (NULL,'".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['email']."','".$_POST['user']."','','".$_POST['tel']."','".$_POST['cel']."','".$_POST['calle']."','".$_POST['cp']."','".$_POST['ciudad']."','".$_POST['pais']."','".$_POST['documtip']."','".$_POST['documento']."')";

    //obtenemos el resultado de la consulta
    $result = mysqli_query($conexion,$peticion);
    header("Location: clientes.php");