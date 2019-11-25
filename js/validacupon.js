
$(document).ready(function() { 
            $("#botones").click(function() { 
               refrescar();
            }); 
        });

function validaventa(cod){
   parametros={
    "cod":cod,
   };
     $.ajax({

                url: "php/validacupon.php",
                type: "POST",
                data:parametros,
               
                success: function(resp){
                 $('#venta').html(resp);
               

                }       
            });
   
}

function refrescar(){
    parametros={
    "id":id,
   };
   $.ajax({
                url: "php/refrescar.php",
                type: "POST",
                 data:parametros,
               
                success: function(resp){
                 $('#myTabl').html(resp);
               

                }       
            });
}