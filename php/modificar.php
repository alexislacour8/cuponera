  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylos/valida.css">
<?php 
include '../conexiones/conexion.php';
$id=$_POST['cod'];
$con= new Conexion();
  $query= $con->prepare("select idproductos,productos.nombre as pro,mail as proveedro, tipo,idcategoria,idusuario,precio,cantidad,fecha,imagen from productos,usuario,subcategoria where idproductos = '$id' and  idusuario =usuario_idusuario and idcategoria=categoria_idcategoria");

  $query ->execute();
  $resultado= $query->fetchAll();
foreach ($resultado as $res) {
	echo "<div class='tam'>
	<form  action='return false' onsubmit='return false' enctype='multipart/form-data'>
      
        <h2>Editar de alta cupon</h2>
        <hr class='colorgraph'>
        <div class='form-group'>
         <div class='form-group col-lg-12 hidden'>
                    <input type='text' name='id' id='id' value='".$res['idproductos']."' class='form-control input-lg' placeholder='Nombre'><label  id ='mensaje1'>Completar campo</label>
        </div>
         <br>
          <br>
        <div class='form-group col-lg-12'>
         <p>nombre</p>
                    <input type='text' name='producto' id='producto' value='".$res['pro']."' class='form-control input-lg' placeholder='Nombre'><label  id ='mensaje1'>Completar campo</label>
        </div>
                <br>
                <br>
        <div class='form-group col-lg-12'>
         <p>precio</p>
                    <input type='number' name='precio'  value='".$res['precio']."' id='precio' class='form-control input-lg' placeholder='precio'><label  id ='mensaje2'>Completar campo</label>
        </div>
        <br>
         <br>
        <div class='form-group col-lg-6 col-xs-12'>
        <select id='categorias' name='categorias' class='form-control input-lg  dropdown-toggle' type='button' data-toggle='dropdown' required>
                    <span class='caret'></span>
                    <option value=".$res['idcategoria'].">".$res['tipo']."</option>
                  </select>
                  
                </div>
                 <br>
                  <br>
                    <br class='hidden-lg'>
                      
                <div class='form-group col-lg-6 col-xs-12'>

                  <select id='proveedor' name='proveedor' class='form-control input-lg dropdown-toggle' type='button' data-toggle='dropdown' required><span class='caret'></span>
                  <option value=".$res['idusuario'].">".$res['proveedro']."</option>
                  </select>

                </div>
                     <br>
                       <br>
                   
                   
                     <br>
        <div class='form-group col-lg-12'>

                    <input type='date' name='fecha' id='fecha'  value='".$res['fecha']."' class='form-control input-lg' placeholder='Contraseña'><label  id ='mensaje3'Completar campo</label>
        </div>
        <br>
         
                        <div class='form-group col-lg-12'>

                             <label class='col-md-4 control-label' for='exampleFormControlFile1'>guardar</label>
                            <center><output id='list'></output></center>
                              <div class='fotos btn btn-success col-lg-12'>
                       <input type='file' class='form-control-file'  value='".$res['imagen']."' name='imagen' id='imagen'>
                        subir foto
                        </div>
          
              <script>
                    $( document ).ready(function() {
                        document.getElementById('list').innerHTML = ['<img src=".$res['imagen'].">'];
                    });
                  </script>
                            </div>
       
        
        <hr class='colorgraph'>
     
        <div class='row'>
          <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                        <input type='submit' id='actualizar' class='btn btn-lg btn-success btn-block' value='Actualizar'>
          </div>
          
        </div>
      
      </div>
    </form>
    </div>";
}

 ?>

  <script type="text/javascript" src="js/editar.js"></script>
  <script type="text/javascript" src="js/imagen.js"></script>