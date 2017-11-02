
<?php 
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    session_start();
    if(!isset($_SESSION['contador'])){$_SESSION['contador']=0;};
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <title>Jcruz Ecommers</title>
    </head>
    <body>
        <div id="contenedor">
            <header>
               <a href="index.php"><h1>Jcruz Ecommers</h1></a>
                <h2>Subtitulo tienda</h2>
            </header>
            <section>
            <div id="contienecarrito">
                    <div id="carrito" style="background:rgb(200,200,200); color:black">
                    
                     Carrito
                    </div>
                <div class="row">
                    <a href="php/deletecarrito.php"><button type="button" class="btn btn-danger">Vaciar Carrito</button></a>
                    <a href="confirmar.php"><button type="button" class="btn btn-success">Confirmar Compra</button></button></a>
                </div>
            </div>
             <br>
            