function validarproductos(){
    var paqueteDeDatos = new FormData();
    paqueteDeDatos.append("producto",$('#producto').val());
    paqueteDeDatos.append("precio",$('#precio').val());
    paqueteDeDatos.append("categorias",$('#categorias').val());
    paqueteDeDatos.append("proveedor",$('#proveedor').val());
    paqueteDeDatos.append("cantidad",$('#cantidad').val());
    paqueteDeDatos.append("fecha",$('#fecha').val());
    paqueteDeDatos.append("imagen",$('#imagen')[0].files[0]);
    

    
    
   $.ajax({
            url: "productos.php",
            type: "POST",
            contentType: false,
            data:paqueteDeDatos, // Al atributo data se le asigna el objeto FormData.
            processData: false,
            cache: false, 
            success: function(resp){
              
                   $('#resultado').html(resp);
                   
               
               

                }       
            });   
}
window.onload = function(){
 
  var fecha = new Date(); //Fecha actual
  var mes = fecha.getMonth()+1; //obteniendo mes
  var dia = fecha.getDate(); //obteniendo dia
  var ano = fecha.getFullYear(); //obteniendo año
  if(dia<10)
    dia='0'+dia; //agrega cero si el menor de 10
  if(mes<10)
    mes='0'+mes //agrega cero si el menor de 10
  document.getElementById('fecha').value=ano+"-"+mes+"-"+dia;
}
$(document).ready(function() { 
            $("#boton").click(function() { 
                 var producto = $('#producto').val();
                    var categorias = $('#categorias :selected').val();
                    var proveedor = $('#proveedor :selected').val();
                    var precio = $('#precio').val();
                    var cantidad = $('#cantidad').val();
                    var fecha = $('#fecha').val();
                    var matchess = producto.match(/\S+/g);
                    var expre =/[a-zA-Z0-9]/;
                    var fecha1 = new Date(); //Fecha actual
                      var mes = fecha1.getMonth()+1; //obteniendo mes
                      var dia = fecha1.getDate(); //obteniendo dia
                      var ano = fecha1.getFullYear(); //obteniendo año
 if(dia<10)
    dia='0'+dia; //agrega cero si el menor de 10
  if(mes<10)
    mes='0'+mes //agrega cero si el menor de 10
  fech=ano+"-"+mes+"-"+dia;
                    if (producto=="") {
                        $("#mensaje1").fadeIn();
                            return false;
                    }
                    if (producto.length >35) {
                         $("#mensaje1").text("maximo de 35 caracteres").fadeIn();
                            return false;
                    }
                    if (matchess[0].length <3) {
                        $("#mensaje1").text("3 caracteres minimo por favor").fadeIn();
                            return false;
                    }

                    if (!expre.test(producto)) {
                        $("#mensaje1").text("no se admiten caracteres especiales").fadeIn();
                            return false;
                    }
                    else{
                        $("#mensaje1").fadeOut();
                    }
                    if (precio=="") {

                        $("#mensaje2").fadeIn();
                        return false;
                    }
                     if (isNaN(precio)) {

                        $("#mensaje2").text("solo numeros").fadeIn();
                        return false;
                    }
                    if (precio== 0) {
                        $("#mensaje2").text("debe poner un precio debe ser mayor a 0").fadeIn();
                            return false;
                    }
                    if (precio < 0) {
                        $("#mensaje2").text("no puede poner numeros negativos").fadeIn();
                            return false;
                    }
                    if (precio.length < 1 || precio.length > 10) {
                        $("#mensaje2").text("minimo 1 maximo 10 caracteres").fadeIn();
                            return false;

                    }
                    else{
                        $("#mensaje2").fadeOut();
                    }
                    if (fech > fecha) {
                        $("#mensaje3").text("ingrese fecha valida").fadeIn();
                            return false;
                    }
                    else{
                        $("#mensaje3").fadeOut();
                    }
                    if (cantidad=="") {

                        $("#mensaje4").fadeIn();
                        return false;
                    }
                    if (cantidad.length < 1 || cantidad.length > 6) {
                        $("#mensaje4").text("minimo 1 maximo 6 caracteres").fadeIn();
                            return false;
                    }
                    if (cantidad== 0) {
                        $("#mensaje4").text("la cantidad debe ser mayor a 0").fadeIn();
                            return false;
                    }
                    if (cantidad < 0) {
                        $("#mensaje4").text("no puede poner cantidades negativas").fadeIn();
                            return false;
                    }
                    else{
                        $("#mensaje4").fadeOut();

                    }
                validarproductos();
            }); 
        });