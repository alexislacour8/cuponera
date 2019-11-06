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

$(document).ready(function() { 
            $("#boton").click(function() { 
                validarproductos();
            }); 
        });