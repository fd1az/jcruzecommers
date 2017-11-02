<?php include('config.php')?>
<?php
//Conexion a la Base de Datos
$conexion = mysqli_connect($server,$user,"",$databesetienda);

//Primera peticion a la base, seleccionamo los productos
$peticion = "UPDATE pedidos SET estado= 2 WHERE id = '".$_GET['id']."'";
//obtenemo el resultado de la consulta
$result = mysqli_query($conexion,$peticion);
mysqli_close($conexion);
header('Location: ../admin/pedidos.php');
?>