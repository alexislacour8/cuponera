$(document).ready(function(){
   $.ajax({
                url: "php/carrucel.php",
                type: "POST",
               
                success: function(resp){
                 $('#carro').html(resp);
               

                }       
            });
  })