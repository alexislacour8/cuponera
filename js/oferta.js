$(document).ready(function(){
   $.ajax({
                url: "php/ofertas.php",
                type: "POST",
               
                success: function(resp){
                 $('#ofert').html(resp);
               

                }       
            });
  })