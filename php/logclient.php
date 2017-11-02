<?php include('config.php')?>
<?php 

include 'cabecera.php';

$contador = 0;
//Conexion a la Base de Datos
$conexion = mysqli_connect($server,$user,"",$databesetienda);

//Primera peticion a la base, seleccionamo los productos
$peticion = "SELECT * FROM clientes WHERE user='".$_POST['user']."' AND password='".$_POST['password']."'";

//obtenemo el resultado de la consulta
$result = mysqli_query($conexion,$peticion);

//convierto la consulta en un Array asociativo e itero sobre el
while($fila = mysqli_fetch_array($result)){
    $contador++;
    $_SESSION['user'] = $fila['id'];
};
if($contador > 0){
    //Inserto los el pedido en la tabla de pedidos
    $peticion = "INSERT INTO pedidos VALUES (null, ".$_SESSION['user'].", '".date('U')."', '0')";
    $result = mysqli_query($conexion,$peticion);
    
    //recupero el ID del pedido, por medio del id del cliente, a su vez ordeno para tener el ultimo registro

    $peticion = "SELECT * FROM pedidos WHERE idcliente='".$_SESSION['user']."' ORDER BY fecha DESC LIMIT 1";
    $result = mysqli_query($conexion,$peticion);
    //Itero sobre el Array de pedido e igualo el idpedido a id
    while($fila = mysqli_fetch_array($result)){
    $contador++;
    $_SESSION['idpedido'] = $fila['id'];
    };
    echo $_SESSION['idpedido'];

    for($i = 0; $i < $_SESSION['contador']; $i++){
        //Inserto en la base lineas pedido, el id de pedido.
        $peticion = "INSERT INTO lineaspedido VALUES (NULL, '".$_SESSION['idpedido']."','".$_SESSION['producto'][$i]."','1' )";
        $result = mysqli_query($conexion,$peticion);
        
        //control de stock
        // 1- selecciono el producto vendido
        $peticion = "SELECT * FROM productos WHERE id='".$_SESSION['producto'][$i]."'";
        $result = mysqli_query($conexion,$peticion);
        //itero sobro el array
        while($fila = mysqli_fetch_array($result)){
            $existencia = $fila['stock'];
            //Actualizo la tabla de productos, restando 1 por cada seleccion
            $peticion2 = "UPDATE productos SET stock = '".($existencia - 1)."'WHERE id='".$_SESSION['producto'][$i]."'";
            $result2 = mysqli_query($conexion,$peticion2);

        }
        
    };


echo "<br>
    <div class='col-lg-4'>
        <div class='alert alert-success' role='alert'>
            <p>Tu pedido se ha realizado exitosamente! Redirigiedo a la pagia principal..</p>
        </div>
    </div>";
    session_destroy();
echo "<script>
        setTimeout('redirige()', 4000);
        function redirige(){
            window.location = '../index.php';
        }
    </script>";
include 'footer_page.php';  

}else{
    echo "<br>
          <br>
            <div class='container-fuild'> 
                <div class='col-lg-4'>
                    <div class='alert alert-danger' role='alert'>
                        <p>Error, el usuario no existe..</p>
                    </div>
                </div>
            </div>";
    echo "<script>
        setTimeout('redirige()', 4000);
        function redirige(){
            window.location = '../confirmar.php';
        }
    </script>";
}
mysqli_close($conexion);
?>