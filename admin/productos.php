<?php include('../php/config.php')?>
<?php include('index.php')?>
    <br>
     <h2>Gestion de Productos</h1>
     <?=date('m/d/Y g:ia');?> 
     <br>
     <div class="container" >
        <div class="row">
            <div class="col-lg-5 rounded" style="background: #dfdfdf;">
                <br>
                <form action="nuevoproducto.php" method="POST">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre: </label>
                        <div class="col-lg-6">
                            <input class="form-control form-control-sm" >
                        </div>
                     </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Precio: </label>
                        <div class="col-lg-3">
                            <input class="form-control form-control-sm" >
                        </div>
                     </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Medidas: </label>
                        <div class="col-lg-3">
                            <input class="form-control form-control-sm" placeholder="Alt">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control form-control-sm" placeholder="Long" >
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control form-control-sm" placeholder="Anch">
                        </div>
                     </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Stock: </label>
                        <div class="col-lg-3">
                            <input class="form-control form-control-sm" >
                        </div>
                     </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Estado: </label>
                        <div class="col-lg-4">
                        <select class="form-control form-control-sm">
                            <option value=""></option>
                            <option value="1">Activado</option>
                            <option value="0">Desactivado</option>
                        </select>
                        </div>
                     </div>
                     
                     
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
                <br>
            </div>
        </div>
     </div>
     <br>  
       <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <table class="table table-hover table-bordered">
                        <?php 
                        date_default_timezone_set('America/Argentina/Buenos_Aires');
                        $conexion = mysqli_connect($server,$user,"",$databesetienda);
                        //Primera peticion a la base, seleccionamo los productos
                        $peticion = "SELECT * FROM productos";

                        //obtenemo el resultado de la consulta
                        $result = mysqli_query($conexion,$peticion);
                         echo " <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Peso</th>
                                        <th>Medidas</th>
                                        <th>Stock</th>
                                        <th>Activado</th>
                                        
                                    </tr>
                                </thead>";
                        //convierto la consulta en un Array asociativo e itero sobre el
                        while($fila = mysqli_fetch_array($result)){
                       
                       
                        echo '<tbody>
                                <tr';
                               
                                echo'>
                                    <td>'.$fila['nombre'].'</td>
                                    <td>'.$fila['precio'].'</td>
                                    <td>'.$fila['peso'].'</td>
                                    <td>'.$fila['lon']."x".$fila['anch']."x".$fila['altura'].'</td>
                                    <td>'.$fila['stock'].'</td>
                                    <td>'.$fila['activado'].'</td>
                                 
                                </tr>
                            </tbody>';
                        };
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