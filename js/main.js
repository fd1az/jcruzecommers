$(document).ready(inicio);
function inicio(){
    $(".botoncompra").click(add);
    $.get('php/addcarrito.php', function (datos) {
        $('#carrito').html(datos);});
}
        
function add()  {
$.get('php/addcarrito.php?p=' + $(this).val(), function (params) {
        $('#carrito').html(params);
    });
}


            
        
