$(document).ready(function(){
   $.ajax({
                url: "php/mostrar.php",
                type: "POST",
               
                success: function(resp){
                 $('#mostrar').html(resp);
               

                }       
            });
  })