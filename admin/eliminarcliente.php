<?php include('../php/config.php')?>
<?php include('index.php')?>

 <?php 
   
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $conexion = mysqli_connect($server,$user,"",$databesetienda);
    //Eliminando Clientes

    $peticion = "DELETE FROM clientes WHERE id =".$_GET['id']."";
    $result = mysqli_query($conexion,$peticion);

   header("Location: clientes.php");