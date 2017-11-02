<?php include('config.php')?>
<?php 
//arranco otra vez la sesion;
session_start();
//
$suma = 0;
if(isset($_GET['p'])){
    $_SESSION['producto'][$_SESSION['contador']] = $_GET['p'];
    $_SESSION['contador']++;
};


//Conexion a la Base de Datos
$conexion = mysqli_connect($server,$user,"",$databesetienda);
mysqli_set_charset($conexion, "utf8");

//convierto la consulta en un Array asociativo e itero sobre el


echo "<table>";
echo "<thead>
            <td>Producto</td>
            <td>Precio</td>
        </thead>";
for($i = 0; $i < $_SESSION['contador']; $i++){
   // echo "Producto: ".$_SESSION['producto'][$i]."<br>";
    //peticion a la base, seleccionamos los productos
    $peticion = "SELECT * FROM productos WHERE id =".$_SESSION['producto'][$i];
    $result = mysqli_query($conexion,$peticion);
    
    while($fila = mysqli_fetch_array($result)){ 
        echo "<tr><td>".$fila['nombre']."</td><td>".$fila['precio']."</td></tr>";
        $suma +=$fila['precio'];
    };
};
echo "<tr><td>Subtotal</td><td>".number_format($suma, 2)."</td></tr>";
echo "</table>";
mysqli_close($conexion);

?>