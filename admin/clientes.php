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
                                            <th style='width: 50px;'class='col-sm-1'>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Email</th>
                                            <th>User</th>
                                            <th>Tel</th>
                                            <th>Cel</th>
                                            <th>Calle</th>
                                            <th>CP</th>
                                            <th>Ciudad</th>
                                            <th>Pais</th>
                                            <th>Tipo Doc</th>
                                            <th>Documento</th>
                                            <th>Actualizar</th>
                                            <th>Eliminar</th>
                                            
                                        </tr>
                                    </thead>";
                            //convierto la consulta en un Array asociativo e itero sobre el
                            echo '<tbody>';
                            while($fila = mysqli_fetch_array($result)){
                                
                        
                            echo '

                                
                                    <tr>
                                        <td>'.$fila['id'].'</td>
                                        <td>'.$fila['nombre'].'</td>
                                        <td>'.$fila['apellidos'].'</td>
                                        <td>'.$fila['email'].'</td>
                                        <td>'.$fila['user'].'</td>
                                        <td>'.$fila['tel'].'</td>   
                                        <td>'.$fila['cel'].'</td>   
                                        <td>'.$fila['calle'].'</td> 
                                        <td>'.$fila['cp'].'</td>
                                        <td>'.$fila['ciudad'].'</td>
                                        <td>'.$fila['pais'].'</td>
                                        <td>'.$fila['documtip'].'</td>
                                        <td>'.$fila['documento'].'</td>
                                    
                                        <td>
                                        <a><button class="updateClient btn btn-secondary  btn-sm">Actualizar</button></a>
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
        <!-- Modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizacion de Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="actualizarcliente.php" method="POST">                
                <div class="modal-body">
                
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">ID:</label>
                        <div class="col-sm-2 input-group-sm">
                            <input type="text" name="id" class="form-control" id="inputid" readonly>
                        </div>
                    </div>        
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-8 input-group-sm">
                            <input type="text" name="nombre" class="form-control" value id="inputname" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Apellidos:</label>
                        <div class="col-sm-8 input-group-sm">
                            <input type="text"class="form-control" name="apellidos" id="inputlastname" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6 input-group-sm">
                            <input type="text" name="email" class="form-control" id="inputemail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">User</label>
                        <div class="col-sm-8 input-group-sm">
                            <input type="text" name="user" class="form-control" id="inputuser" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tel:</label>
                        <div class="col-sm-8 input-group-sm">
                            <input type="text" name="tel" class="form-control" id="inputtel" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Cel</label>
                        <div class="col-sm-8 input-group-sm">
                            <input type="text" name="cel" class="form-control" id="inputcel" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Calle</label>
                        <div class="col-sm-8 input-group-sm">
                            <input type="text" name="calle"class="form-control" id="inputcalle" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">CP</label>
                        <div class="col-sm-4 input-group-sm">
                            <input type="text" name="cp" class="form-control" id="inputcp" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Ciudad</label>
                        <div class="col-sm-8 input-group-sm">
                            <input type="text" name="ciudad"class="form-control" id="inputciudad" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Pais</label>
                        <div class="col-sm-8 input-group-sm">
                            <input type="text" name="pais"class="form-control" id="inputpais" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tipo Doc</label>
                        <div class="col-sm-4 input-group-sm">
                            <input type="text" name="documtip" class="form-control" id="inputtipdoc" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Numero</label>
                        <div class="col-sm-8 input-group-sm">
                            <input type="text" name="documento" class="form-control" id="inputnumdoc" >
                        </div>
                    </div>
                                    
                </div>
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>  
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
        <script>
            $(document).ready(function(){
                $(".updateClient").click(function(){
 
                var valores=[];
 
            // Obtenemos todos los valores contenidos en los <td> de la fila
            // seleccionada
                $(this).parents("tr").find("td").each(function(){
				console.log($(this).html())
                valores.push($(this).html());
				
                });
			    valores.pop()
                        $("#inputid").val(valores[0]);
                        $("#inputname").val(valores[1]);
                        $("#inputlastname").val(valores[2]);
                        $("#inputemail").val(valores[3]);
                        $("#inputuser").val(valores[4]);
                        $("#inputtel").val(valores[5]);
                        $("#inputcel").val(valores[6]);
                        $("#inputcalle").val(valores[7]);
                        $("#inputcp").val(valores[8]);
                        $("#inputciudad").val(valores[9]);
                        $("#inputpais").val(valores[10]);
                        $("#inputtipdoc").val(valores[11]);
                        $("#inputnumdoc").val(valores[12]);
                        $("#updateModal").modal('show');
                    });
                });
        </script>
    </body>
</html>