$(document).ready(function(){
 
         
  $("#elimina").click(function() { 

              eliminacupon();
              
              
            }); 
  })


function eliminacupon(){
	
    var paqueteDeDatos = new FormData();
     paqueteDeDatos.append("id",$('#id').val());
   
    
   $.ajax({

                url: "php/eliminarcupon.php",
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
 


}
