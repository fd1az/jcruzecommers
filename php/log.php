<?php include('config.php')?>

 <?php 
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $conexion = mysqli_connect($server,$user,"",$databesetienda);
    //Primera peticion a la base, seleccionamo los productos
    $peticion = "INSERT INTO elogs VALUES (
        '".date('U')."',
        '".date('Y')."',
        '".date('m')."',
        '".date('d')."',
        '".date('H')."',
        '".date('i')."',
        '".date('s')."',
        '".$_SERVER['REMOTE_ADDR']."',
        '".$_SERVER['HTTP_USER_AGENT']."',
        '".$_SERVER['REQUEST_URI']."'
    )";

    //obtenemos el resultado de la consulta
    $result = mysqli_query($conexion,$peticion);
    mysqli_close($conexion);
    ?>