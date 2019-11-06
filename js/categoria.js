$(document).ready(function(){
  
   $.ajax({
                url: "php/categorias.php",
                type: "POST",
               
                success: function(resp){
                 $('#categorias').html(resp);
               

                }       
            });
  })

$(document).ready(function(){
   $.ajax({
                url: "php/selecpro.php",
                type: "POST",
               
                success: function(resp){
                 $('#proveedor').html(resp);
               

                }       
            });
  })