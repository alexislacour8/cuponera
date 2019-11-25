<link rel="stylesheet" type="text/css" href="stylos/valida.css">
<?php 
include '../conexiones/conexion.php';
$id=$_POST['id'];
$con= new Conexion();
  $query= $con->prepare("SELECT nombre,idproductos,cantidad FROM productos WHERE idproductos='$id'
    ");

  $query ->execute();
  $resultado= $query->fetchAll();
foreach ($resultado as $res) {
	echo "<div class='tam'>
	<form  action='return false' onsubmit='return false' enctype='multipart/form-data'>
      
        <h2>Stock articulo</h2>
        <hr class='colorgraph'>
        <div class='form-group'>
         <div class='form-group col-lg-12 hidden'>
           
                    <input type='text' name='id' id='id' value='".$res['idproductos']."'  class='form-control input-lg' placeholder='Codigo cupon'><label  id ='mensaje1'>Completar campo</label>
        </div>
        </div>
        <div class='form-group'>
         <div class='form-group col-lg-12'>
           
                    <input type='text' name='id'  value='".$res['nombre']."'  class='form-control input-lg' placeholder='Codigo cupon'><label  id ='mensaje1'>Completar campo</label>
        </div>
        </div>
         <div class='form-group'>
         <div class='form-group col-lg-12'>
           
                    <input type='text' name='id' id='canti'  value='".$res['cantidad']."'  class='form-control input-lg' placeholder='Codigo cupon'><label  id ='mensaje1'>Completar campo</label>
        </div>
        </div>
       
        <div class='row'>
          <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                        <input type='submit' id='stockcont' class='btn btn-lg btn-success btn-block' value='Actulalizar'>
          </div>
          
        </div>
      
      </div>
    </form>
    </div>";
}

 ?>
 <script type="text/javascript" src="js/stock.js"></script>