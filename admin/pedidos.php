<?php include('../php/config.php')?>
<?php include('index.php')?>
    <br>
     <h2>Administracion de Pedidos</h1>
     <?=date('m/d/Y g:ia');?> 
     <br>  
       <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <table class="table table-hover table-bordered">
                        <?php 
                        date_default_timezone_set('America/Argentina/Buenos_Aires');
                        $conexion = mysqli_connect($server,$user,"",$databesetienda);
                        //Primera peticion a la base, seleccionamo los productos
                        $peticion = "SELECT pedidos.id AS idpedido,fecha,estado,nombre,apellidos FROM pedidos LEFT JOIN clientes ON pedidos.idcliente = clientes.id ORDER BY estado,fecha ASC";

                        //obtenemo el resultado de la consulta
                        $result = mysqli_query($conexion,$peticion);
                         echo " <thead>
                                    <tr>
                                        <th>ID Cliente</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Gestionar Pedido</th>
                                        <th>Enviar</th>
                                        <th>Cancelar</th>
                                    </tr>
                                </thead>";
                                echo '<tbody>';
                        //convierto la consulta en un Array asociativo e itero sobre el
                        while($fila = mysqli_fetch_array($result)){
                        $estado = $fila['estado'];
                        switch ($estado) {
                            case 0:
                               $get_estado = "Pendiente";
                                break;
                            case 1:
                               $get_estado = "Entregado";
                                break;
                            case 2:
                               $get_estado = "Cancelado";
                                break;
                            
                        }
                        
                        echo        '<tr';
                                if($estado == 0){
                                     echo' class="table-warning"';
                                    }elseif($estado == 1){
                                        echo' class="table-success"';
                                    }else{
                                        echo' class="table-danger"';
                                    };
                                echo'>
                                   <td>'.$fila['nombre']." ".$fila['apellidos'].'</td>
                                    <td>'.date("M d Y H:i:s",$fila['fecha']).'</td>
                                    <td>'.$get_estado.'</td>
                                    <td><a href="gestionpedido.php?id='.$fila['idpedido'].'"><div class="trans text-center"><button class="btn btn-primary">Ver</button></div></div></a></td>
                                    <td><a href="../php/enviarpedido.php?id='.$fila['idpedido'].'"><button class="btn btn-primary ">Enviar Pedido</button></a></td>
                                    <td><a href="../php/cancelarpedido.php?id='.$fila['idpedido'].'"><button class="btn btn-danger ">Cancelar Pedido</button></a></td>
                                </tr>';
                            
                        };
                        echo '</tbody>';
                        mysqli_close($conexion);

                        ?>
                    </table>
                </div>
            </div>
       </div>     
        


   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>