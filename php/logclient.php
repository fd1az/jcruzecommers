<?php 

session_start();

$contador = 0;
//Conexion a la Base de Datos
$conexion = mysqli_connect("localhost","root","","tiendajcruz");

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
   
        $peticion = "INSERT INTO lineaspedido VALUES (NULL, '".$_SESSION['idpedido']."','".$_SESSION['producto'][$i]."','1' )";
        $result = mysqli_query($conexion,$peticion);
        
};


}else{
    echo "El usuario no existe";
}
mysqli_close($conexion);
?>