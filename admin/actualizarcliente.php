<?php include('../php/config.php')?>
<?php include('index.php')?>

 <?php 
    var_dump($_POST);
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $conexion = mysqli_connect($server,$user,"",$databesetienda);
    //Primera peticion a la base, seleccionamo los productos
    $peticion = " UPDATE clientes SET 
    nombre = '".$_POST['nombre']."',
    apellidos ='".$_POST['apellidos']."',
    email = '".$_POST['email']."', 
    user = '".$_POST['user']."', 
    tel = '".$_POST['tel']."',
    cel ='".$_POST['cel']."', 
    calle ='".$_POST['calle']."',
    cp ='".$_POST['cp']."',
    ciudad ='".$_POST['ciudad']."',
    pais ='".$_POST['pais']."',
    documtip ='".$_POST['documtip']."',
    documento ='".$_POST['documento']."'

    WHERE id ='".$_POST['id']."' ";

    //obtenemos el resultado de la consulta
    $result = mysqli_query($conexion,$peticion);
    header("Location: clientes.php");