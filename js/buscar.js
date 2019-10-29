$(document).ready(function(){
   $.ajax({
                url: "buscapro.php",
                type: "POST",
               
                success: function(resp){
                 $('#busca').html(resp);
               

                }       
            });
  })