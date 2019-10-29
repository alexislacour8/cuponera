$(document).ready(function(){
   $.ajax({
                url: "php/cate.php",
                type: "POST",
               
                success: function(resp){
                 $('#cate').html(resp);
               

                }       
            });
  })