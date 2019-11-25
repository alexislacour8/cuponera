$(document).ready(function(){
 
         
  $("#stockcont").click(function() { 

              stockdato();
              
              
            }); 
  })

function stockdato(){
    
    var paqueteDeDatos = new FormData();
     paqueteDeDatos.append("id",$('#id').val());
     paqueteDeDatos.append("stock",$('#canti').val());
        
    
   $.ajax({

                url: "php/stockcupon.php",
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