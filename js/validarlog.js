function Validar()
        {
          var usuario= document.getElementById('usuario').value;
          var contra =document.getElementById('contra').value;
        
            $.ajax({
                url: "php/logau.php",
                type: "POST",
                data: "user="+usuario+"&pass="+contra,
                success: function(resp){
                  if (resp=="logeado") {
                   window.location.replace("index.php");
                  }
               else{
                 $('#resultado').html(resp);
               }
                }       
            });
        }

$(document).ready(function() { 
            $("#boton").click(function() { 
                Validar();
            }); 
        });