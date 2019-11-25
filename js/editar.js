$(document).ready(function(){
 $("#refresca").click(function() { 

               refrescar();
             
              
            }); 
  $("#stockbajos").click(function() { 

               stockbajos();
             
              
            }); 
         
  $("#actualizar").click(function() { 

               editar();
               refrescar();
              
            }); 
  })

function editar(){
	
    var paqueteDeDatos = new FormData();
     paqueteDeDatos.append("id",$('#id').val());
    paqueteDeDatos.append("producto",$('#producto').val());
    paqueteDeDatos.append("precio",$('#precio').val());
    paqueteDeDatos.append("categorias",$('#categorias').val());
    paqueteDeDatos.append("proveedor",$('#proveedor').val());
    paqueteDeDatos.append("cantidad",$('#cantidad').val());
    paqueteDeDatos.append("fecha",$('#fecha').val());
    if ($('#imagen')[0].files[0]){
    paqueteDeDatos.append("imagen",$('#imagen')[0].files[0]);
    
    }
    
   $.ajax({

                url: "editar.php",
                 type: "POST",
                contentType: false,
            data:paqueteDeDatos, // Al atributo data se le asigna el objeto FormData.
            processData: false,
            cache: false,
            beforeSend: function(){
              $('#edit').html("procesando")
            } ,
                success: function(resp){
              
                   $('#edit').html(resp);

               
               

                }       
            });
 refrescar();


}

function refrescar(){
   $.ajax({
                url: "php/actualiza.php",
                type: "POST",
               
                success: function(resp){
                 $('#myTable').html(resp);
               

                }       
            });
}

function stockbajos(){
   $.ajax({
                url: "php/stock.php",
                type: "POST",
               
                success: function(resp){
                 $('#myTable').html(resp);
               

                }       
            });
}