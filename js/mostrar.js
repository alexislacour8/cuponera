$(document).ready(function(){
   $.ajax({
                url: "mostrar.php",
                type: "POST",
               
                success: function(resp){
                 $('#mostrar').html(resp);
               

                }       
            });
  })