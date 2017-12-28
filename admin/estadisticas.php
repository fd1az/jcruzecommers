<?php include('../php/config.php')?>
<?php include('index.php')?>
<br>
<h3>Productos mas venidos</h3   >
<div class="container">
    <table class="table table-responsive table-bordered table-striped table-sm">
    <?php 
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $conexion = mysqli_connect($server,$user,"",$databesetienda);
        //Primera peticion a la base, seleccionamo los productos
        $peticion = "SELECT idproducto, productos.nombre, COUNT(idproducto) FROM lineaspedido LEFT JOIN productos ON lineaspedido.idproducto = productos.id GROUP BY idproducto ORDER BY COUNT(idproducto) DESC";

        //obtenemo el resultado de la consulta
        $result = mysqli_query($conexion,$peticion);
        
        echo"<thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad Vendida</th>
                </tr>";
        echo "<tbody>";        

        while($fila = mysqli_fetch_array($result)){
            echo'
            <tr>
                <td>'.$fila['nombre'].'</td>
                <td>'.$fila['COUNT(idproducto)'].'</td>
            </tr>
            ';

        };
        echo "</tbody>";
        mysqli_close($conexion);

    ?>
    </table>
 </div>

<br>

<h3>Mejores Clientes</h3>

 <div class="container">
    <table class="table table-responsive table-bordered table-striped table-sm">
    <?php 
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $conexion = mysqli_connect($server,$user,"",$databesetienda);
        //Primera peticion a la base, seleccionamo los productos
        $peticion2 = "SELECT clientes.nombre, clientes.apellidos, SUM(precio) FROM `pedidos` LEFT JOIN lineaspedido ON pedidos.id = lineaspedido.idpedido LEFT JOIN productos ON lineaspedido.idproducto = productos.id LEFT JOIN clientes ON pedidos.idcliente = clientes.id GROUP BY idcliente ORDER BY SUM(precio) DESC";

        //obtenemo el resultado de la consulta
        $result = mysqli_query($conexion,$peticion2);
        
        echo"<thead>
                <tr>
                    <th>Cliente</th>
                    <th>Total Compras</th>
                </tr>";
        echo "<tbody>";        

        while($fila = mysqli_fetch_array($result)){
            echo'
            <tr>
                <td>'.$fila['nombre'].' '.$fila['apellidos'].'</td>
                <td>$ '.$fila['SUM(precio)'].'</td>
            </tr>
            ';

        };
        echo "</tbody>";
        mysqli_close($conexion);

    ?>
    </table>
 </div>