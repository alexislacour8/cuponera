function validarproductos(){
    var paqueteDeDatos = new FormData();
    paqueteDeDatos.append("precio",$('#precio').val());
    paqueteDeDatos.append("producto",$('#producto').val());
    paqueteDeDatos.append("categorias",$('#categorias').val());
    paqueteDeDatos.append("proveedor",$('#proveedor').val());
    paqueteDeDatos.append("cantidad",$('#cantidad').val());
    paqueteDeDatos.append("fecha",$('#fecha').val());
    paqueteDeDatos.append("imagen",$('#imagen')[0].files[0]);
     
    var producto = $('#producto').val();
    var categorias = $('#categorias :selected').val();
    var proveedor = $('#proveedor :selected').val();
    var precio = $('#precio').val();
    var cantidad = $('#cantidad').val();
    var fecha = $('#fecha').val();

    
    
   $.ajax({

            url: "productos.php",
            type: "POST",
            contentType: false,
            data: "producto="+producto+"&precio="+precio+"&categorias="+categorias+"&proveedor="+proveedor+"&cantidad="+cantidad+"&fecha="+fecha,
            processData: false,
            cache: false, 
            success: function(resp){
              
                   $('#resultado').html(resp);
               
               

                }       
            });   
}

$(document).ready(function() { 
            $("#boton").click(function() { 
                validarproductos();
            }); 
        });