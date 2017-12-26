<?php include('../php/config.php')?>
<?php include('index.php')?>
<br>

<?php 
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $conexion = mysqli_connect($server,$user,"",$databesetienda);
    //Primera peticion a la base, seleccionamo los productos
    $peticion = "SELECT idproducto, productos.nombre, COUNT(idproducto) FROM lineaspedido LEFT JOIN productos ON lineaspedido.idproducto = productos.id GROUP BY idproducto ORDER BY COUNT(idproducto) DESC";

    //obtenemo el resultado de la consulta
    $result = mysqli_query($conexion,$peticion);
    
    while($fila = mysqli_fetch_array($result)){

    };
    mysqli_close($conexion);

 ?>