<?php include('../php/config.php')?>
<?php include('index.php')?>

<br>

        <div class="container-fluid">
            <div class="col-xs-11 col-xs-offset1 col-md-10 col-md-offset-1 form-content">

                <form action="nuevocliente.php" method="POST">
                        <div class="row form-inline">

                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Nombre</label>
                                            <input class="form-control" name="nombre" placeholder="Nombre" maxlength="40" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Apellido</label>
                                            <input class="form-control" name="apellidos" placeholder="Apellidos" maxlength="40" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Email</label>
                                            <input class="form-control" name="email" placeholder="email" maxlength="40" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="control-label">User</label>
                                            <input class="form-control" name="user" placeholder="user" maxlength="40" type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Telefono</label>
                                            <input class="form-control" name="tel" placeholder="Tel." maxlength="40" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Celular</label>
                                            <input class="form-control" name="cel" placeholder="Cel." maxlength="40" type="text">
                                        </div>
                                    </div>

                                </div>      

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Calle</label>
                                            <input class="form-control" name="calle" placeholder="Calle" maxlength="40" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Ciudad</label>
                                            <input class="form-control" name="ciudad" placeholder="Ciudad" maxlength="40" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Codigo Postal</label>
                                            <input class="form-control" name="cp" placeholder="Codigo Postal" maxlength="40" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Pais.</label><br>
                                            <input class="form-control" name="pais" placeholder="Pais" maxlength="40" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-6 col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Documento</label>
                                                        <select class="form-control" id="documentTypeIdSelect" name="documtip">
                                                            <option value=""></option>
                                                            <option value="DNI">DNI</option>
                                                            <option value="CUIT">CUIT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-5">
                                                    <div class="form-group" style="margin-bottom: 5px;">
                                                        <label class="control-label">&nbsp;</label>
                                                        <input class="form-control" id="documentNumberInput" name="documento" data-error="Documento" placeholder="Documento" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                
                                </div>
                                            
                            </div>
                            
                            
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                            <br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="row"> 
                                    <div  class="col">
                                        <button type="submit" class="btn btn-primary">Submit</button> 
                                    </div>
                                </div>
                        </div>
                </form>
            </div>
        </div>
        <br>
        <hr>
        <br>

        <div class="container-fuild">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-responsive table-bordered table-striped table-sm">
                            <?php 
                            date_default_timezone_set('America/Argentina/Buenos_Aires');
                            $conexion = mysqli_connect($server,$user,"",$databesetienda);
                            //Primera peticion a la base, seleccionamo los productos
                            $peticion = "SELECT * FROM clientes";

                            //obtenemo el resultado de la consulta
                            $result = mysqli_query($conexion,$peticion);
                            echo " <thead>
                                        <tr>
                                            <th class='col-sm-2'>Nombre</th>
                                            <th class='col-sm-2'>Apellidos</th>
                                            <th class='col-sm-2'>Email</th>
                                            <th class='col-sm-2'>User</th>
                                            <th class='col-sm-2'>Tel</th>
                                            <th class='col-sm-2'>Cel</th>
                                            <th class='col-sm-2'>Calle</th>
                                            <th class='col-sm-2'>CP</th>
                                            <th class='col-sm-2'>Ciudad</th>
                                            <th class='col-sm-2'>Pais</th>
                                            <th class='col-sm-2'>Tipo Doc</th>
                                            <th class='col-sm-2'>Documento</th>
                                            <th class='col-sm-2'>Actualizar</th>
                                            <th class='col-sm-2'>Eliminar</th>
                                            
                                        </tr>
                                    </thead>";
                            //convierto la consulta en un Array asociativo e itero sobre el
                            echo '<tbody>';
                            while($fila = mysqli_fetch_array($result)){
                        
                        
                            echo '

                                
                                    <tr>
                                        <td class="">'.$fila['nombre'].'</td>
                                        <td class="">'.$fila['apellidos'].'</td>
                                        <td>'.$fila['email'].'</td>
                                        <td class="">'.$fila['user'].'</td>
                                        <td class="">'.$fila['tel'].'</td>   
                                        <td class="">'.$fila['cel'].'</td>   
                                        <td class="">'.$fila['calle'].'</td> 
                                        <td class="">'.$fila['cp'].'</td>
                                        <td class="">'.$fila['ciudad'].'</td>
                                        <td class="">'.$fila['pais'].'</td>
                                        <td class="">'.$fila['documtip'].'</td>
                                        <td class="">'.$fila['documento'].'</td>
                                    
                                        <td>    
                                            <button type="submit" class="btn btn-secondary btn-sm">Actualizar</button>
                                        </td>
                                        <td>
                                            <a onclick="deleteCliente('.$fila['id'].')"><button class="btn btn-danger btn-sm">Eliminar</button></a>
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
            function deleteCliente(idToDelete){
                var confirmacion = confirm("Estas Seguro que quieres eleminar el registro id: " + idToDelete);
        
                if(confirmacion){
                     this.location ="eliminarcliente.php?id="+idToDelete;
                }
        
            };

        </script>
    </body>
</html>