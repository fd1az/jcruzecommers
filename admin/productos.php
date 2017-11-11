<?php include('../php/config.php')?>
<?php include('index.php')?>
    
    <br>
        <div class="container">
            <h2>Gestion de Productos</h1>
        </div>
     <br>
     <div class="container">
        <div class="row">
            <div class="col-lg-5 rounded" style="background: #dfdfdf;">
                <br>
                <form action="nuevoproducto.php" method="POST">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre: </label>
                        <div class="col-lg-6">
                            <input class="form-control form-control-sm" name="nombre">
                        </div>
                     </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Precio: </label>
                        <div class="col-lg-3">
                            <input class="form-control form-control-sm" name="precio" >
                        </div>
                     </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Peso: </label>
                        <div class="col-lg-3">
                            <input class="form-control form-control-sm" name="peso">
                        </div>
                     </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Medidas: </label>
                        <div class="col-lg-3">
                            <input class="form-control form-control-sm" placeholder="Long" name="lon">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control form-control-sm" placeholder="Ancho" name="anch">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control form-control-sm" placeholder="Alt" name="altura">
                        </div>
                     </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Stock: </label>
                        <div class="col-lg-3">
                            <input class="form-control form-control-sm" name="stock">
                        </div>
                     </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Estado: </label>
                        <div class="col-lg-4">
                        <select class="form-control form-control-sm" name="activado">
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
     <hr>
    <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <table class="table table-responsive table-bordered table-striped table-sm">
                        <?php 
                        date_default_timezone_set('America/Argentina/Buenos_Aires');
                        $conexion = mysqli_connect($server,$user,"",$databesetienda);
                        //Primera peticion a la base, seleccionamo los productos
                        $peticion = "SELECT * FROM productos";

                        //obtenemo el resultado de la consulta
                        $result = mysqli_query($conexion,$peticion);
                         echo " <thead>
                                    <tr>
                                        <th class='col-sm-2'>Producto</th>
                                        <th class='col-sm-2'>Precio</th>
                                        <th class='col-sm-2'>Peso</th>
                                        <th class='col-sm-2'>Medidas</th>
                                        <th class='col-sm-2'>Stock</th>
                                        <th class='col-sm-2'>Activado</th>
                                        <th class='col-sm-2'>Actualizar</th>
                                        <th class='col-sm-2'>Eliminar</th>
                                        
                                    </tr>
                                </thead>";
                        //convierto la consulta en un Array asociativo e itero sobre el
                        echo '<tbody>';
                        while($fila = mysqli_fetch_array($result)){
                       
                       
                        echo '

                            
                                <tr>
                                    <form class="form-control col-sm-12" action="actualizarproducto.php?id='.$fila['id'].'" method="POST">

                                    <td class="col-lg-2">
                                    <input class="text-center col-sm-6" type="text" name="nombre" value="'.$fila['nombre'].'">
                                    
                                    </td>
                                    <td class=""><input size ="12" class="text-center" type="text" name="precio" value="'.$fila['precio'].'""></td>
                                    <td  ><input size="5" class="text-center" type="text" name="peso" value="'.$fila['peso'].'"></td>
                                    <td class="col-sm-2"><input class="text-center col-sm-12"  type="text" name="lon" value="'.$fila['lon'].'"><input class="text-center" size="8" type="text" name ="anch" value="'.$fila['anch'].'"><input class="text-center col-sm-12" type="text" name="altura" value="'.$fila['altura'].'"></td>
                                    <td class="col-sm-2"><input class="text-center" size="8" type="text" name="stock" value="'.$fila['stock'].'"></td> 
                                    <td class="col-sm-2"><input class="text-center col-sm-12" type="text" name="activado" value="'.$fila['activado'].'"></td>
                                   
                                    <td>    
                                        <button type="submit" class="btn btn-secondary btn-sm">Actualizar</button>
                                    </td>
                                    
                                </form>
                                 <td>
                                        <a onclick="deleteProduct('.$fila['id'].')"><button class="btn btn-danger btn-sm">Eliminar</button></a>
                                    </td>
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
    <script>
    function deleteProduct(idToDelete){
        var confirmacion = confirm("Estas Seguro que quieres eleminar el registro id: " + idToDelete);
        
        if(confirmacion){
        this.location ="eliminarproducto.php?id="+idToDelete;
        }
        
    };

</script>
    </body>
</html>