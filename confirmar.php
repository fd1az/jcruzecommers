<?php require_once('php/cabecera.php')?>
<br>
<br>
<h6>¿Eres Usuario?</h6>
<form class="form" action="php/logclient.php" method="POST">
  <div class="col-lg-6">
    <div class="form-group">
      <label for="staticEmail2"  class="sr-only">Usuario</label>
      <input type="text" name="user" class="form-control" id="staticEmail2" placeholder="Ingresa tu Usuario">
    </div>
    <div class="form-group">
      <label for="inputPassword2" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>

<br>
<?php require_once('php/footer_page.php')?>