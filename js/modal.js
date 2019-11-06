$(document).ready(function(){
  $("#botones").click(function() { 
               editardatos();
            }); 
  })

function editardatos(){
	
    var id= $('#id').val();

    
    
   $.ajax({

                url: "php/modal.php",
                type: "POST",
                data: "id="+id,
                success: function(resp){
              
                   $('#resultados').html(resp);
                  if (resp=="error") {
                     window.location.replace("menu.php");
                  }
               

                }       
            });   
}