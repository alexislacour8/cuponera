$(document).ready(function(){
   $.ajax({
                url: "carrucel.php",
                type: "POST",
               
                success: function(resp){
                 $('#carro').html(resp);
               

                }       
            });
  })