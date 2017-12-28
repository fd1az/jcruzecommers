<?php require_once('php/cabecera.php')?>
<br>
<br>
<p id="textwelcome">¡Hola! Para comprar, ingresá a tu cuenta</p>
<button id="existo" onclick="soycliente"class="btn btn-primary">Tengo Cuenta</button>
<button id="soynuevo" class="btn btn-primary">Soy Nuevo</button>
<br>
<form id="siexiste" class="form" action="php/logclient.php" method="POST">
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

<form id="sisoynuevo" class="form" action="php/clienteweb.php" method="POST">
  <div class="col-lg-6">
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
                    <label class="control-label">Documento</label>
                    <select class="form-control" id="documentTypeIdSelect" name="documtip">
                        <option value=""></option>
                        <option value="DNI">DNI</option>
                        <option value="CUIT">CUIT</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group" style="margin-bottom: 5px;">
                    <label class="control-label">&nbsp;</label>
                    <input class="form-control" id="documentNumberInput" name="documento" data-error="Documento" placeholder="Documento" type="text" value="">
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
                    <label for="name" class="control-label">Contrseña</label>
                    <input class="form-control" name="password" placeholder="Contraseña" maxlength="40" type="text">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name" class="control-label">Confirmar</label>
                    <input class="form-control" name="confing" placeholder="Confirmar" maxlength="40" type="text">
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
            <div class="row">
              <div class="col-sm-6">
                  <div class="form-group">
                      <label for="name" class="control-label">Calle</label>
                      <input class="form-control" name="calle" placeholder="Tel." maxlength="40" type="text">
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group">
                      <label for="name" class="control-label">Ciudad</label>
                      <input class="form-control" name="ciudad" placeholder="Cel." maxlength="40" type="text">
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
<script>
  $(document).ready(function(){
    $("#siexiste").hide();
    $("#sisoynuevo").hide();  
  
    $("#existo").click(function(){
        $("#siexiste").show();
        $("#existo").hide();
        $("#soynuevo").hide();
    });
    $("#soynuevo").click(function(){
        $("#sisoynuevo").show();
        $("#textwelcome").text("Ingresa tus Datos");
        $("#existo").hide();
        $("#soynuevo").hide();
    });
  
});
</script>
<br>
<?php require_once('php/footer_page.php')?>