$(document).ready(function() { 
            $("#boton").click(function() { 
                buscar();
            }); 
        });


function buscar(){ 
	var buscando = document.getElementById("buscando");
   $.ajax({


                url: "buscando.php",
                type: "POST",
                data:"buscando="+buscando,
               
                success: function(resp){
                 $('#busca').html(resp);
               

                }       
            });
}