
function validardatos(){
	var usuario= document.getElementById('usuario').value;
    var contra =document.getElementById('contra').value;
    var mail =document.getElementById('mail').value;
    
   $.ajax({

                url: "php/datosregistro.php",
                type: "POST",
                data: "usuario="+usuario+"&contra="+contra+"&mail="+mail,
               beforeSend:function(){
               	 $('#resultado').html("<div class='col-md-6'><div class='progress-outer'><div class='progress'><div class='progress-bar progress-bar-info progress-bar-striped active' style='width:99%; box-shadow:-1px 10px 10px rgba(91, 192, 222, 0.7);''></div><div class='progress-value'>99%</div></div></div>");
               },

                success: function(resp){
              
                   $('#resultado').html(resp);
               
               

                }       
            });   
}




$(document).ready(function() { 
            $("#boton").click(function() { 
            	var exprecion =/[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}/;
			var nombre = $("#usuario").val();
			var mail = $("#mail").val();
			
			var contra =$("#contra").val();
			var matches = nombre.match(/\S+/g);
			 var expre =/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]*$/;
			var exp=/[a-zA-Z0-9]/;
			
			if (nombre=="") {
				$("#mensaje1").fadeIn();
				return false;
			}
			
		if (!expre.test(nombre)) {
			$("#mensaje1").text("no se admiten numeros").fadeIn();
				return false;
		}
		if (matches.length < 2) {
			$("#mensaje1").text("nombre completo").fadeIn();
				return false;
		}
		if (matches[0].length <3 || matches[1].length <3) {
			$("#mensaje1").text("3 caracteres minimo por palabra").fadeIn();
				return false;
		}
		
		
		else{
			$("#mensaje1").fadeOut();
		}
		if (mail=="") {
			$("#mensaje2").fadeIn();
				return false;
		}
		
		if (!exprecion.test(mail)) {
			$("#mensaje2").text("mail invalido").fadeIn();
				return false;
		}
		else{
			$("#mensaje2").fadeOut();
		}
		if (contra=="") {
			$("#mensaje3").fadeIn();
				return false;
		}
		if (!exp.test(contra)) {
			$("#mensaje3").text("no se admiten espacios ni caracteres especiales").fadeIn();
				return false;
		}
		if (contra.length < 6 || contra.length > 8) {
			$("#mensaje3").text("minimos 6 maximo 8 caracteres").fadeIn();
				return false;
		}
		else{
			$("#mensaje3").fadeOut();
		}
                validardatos();
            }); 
        });

