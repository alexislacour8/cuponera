$(document).ready(function(){
 
         
  $("#validar").click(function() { 

               editar();
               refrescar();
              
            }); 
  })
function editar(){
	
    var paqueteDeDatos = new FormData();
     paqueteDeDatos.append("id",$('#id').val());
      paqueteDeDatos.append("cod",$('#val').val());
   
    
   $.ajax({

                url: "php/valcupon.php",
                 type: "POST",
                contentType: false,
            data:paqueteDeDatos, // Al atributo data se le asigna el objeto FormData.
            processData: false,
            cache: false,
            beforeSend: function(){
              $('#venta').html("procesando")
            } ,
                success: function(resp){
              
                   $('#venta').html(resp);

               
               

                }       
            });
 refrescar();


}
