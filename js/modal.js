$(document).ready(function(){
  $("#botones").click(function() { 
               editardatos();
            }); 
  })

function editardatos(){
  
    var cantidad= $('#cantidad').val();
     var precio= $('#precio').val();
   
    var producto= $('#producto').val();
var $id= $('#id').val();
    
    
   $.ajax({

                url: "php/modal.php",
                type: "POST",
                data: "producto="+producto+"&cantidad="+cantidad+"&precio="+precio+"&id="+$id,
                success: function(resp){
              
                   $('#resultados').html(resp);
                 
               

                }       
            });   
}