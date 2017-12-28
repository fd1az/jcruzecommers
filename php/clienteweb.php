<?php include('config.php')?>
<?php include('cabecera.php')?>

<?php 
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $conexion = mysqli_connect($server,$user,"",$databesetienda);
    //Primera peticion a la base, seleccionamo los productos
    $peticion = "INSERT INTO clientes VALUES (NULL,'".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['email']."','".$_POST['user']."','".$_POST['password']."','".$_POST['tel']."','".$_POST['cel']."','".$_POST['calle']."','".$_POST['cp']."','".$_POST['ciudad']."','".$_POST['pais']."','".$_POST['documtip']."','".$_POST['documento']."')";

    //obtenemos el resultado de la consulta
    $result = mysqli_query($conexion,$peticion);

?>
<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>

<form id="siexiste" class="form" action="logclient.php" method="POST">
  <div class="col-lg-4">
    <div class="form-group">
      <label for="staticEmail2"  class="sr-only"></label>
      <input type="text" name="user" class="form-control " id="staticEmail2" value="<?php echo $_POST['user']?>">
    </div>
    <div class="form-group">
      <label for="inputPassword2" class="sr-only"></label>
      <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Ingresa Password">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>