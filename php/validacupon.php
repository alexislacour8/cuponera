 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylos/valida.css">
<?php 
include '../conexiones/conexion.php';
$id=$_POST['cod'];
$con= new Conexion();
  $query= $con->prepare("SELECT codigoventa FROM cuponventa WHERE idcuponventa='$id'
    ");

  $query ->execute();
  $resultado= $query->fetchAll();
foreach ($resultado as $res) {
	echo "<div class='tam'>
	<form  action='return false' onsubmit='return false' enctype='multipart/form-data'>
      
       
        <hr class='colorgraph'>
         <div class='form-group hidden'>
         <div class='form-group col-lg-12'>
                    <input type='text' name='id' id='val' value=".$id."  class='form-control input-lg' placeholder='Codigo cupon'><label  id ='mensaje1'>Completar campo</label>
        </div>
        </div>
        <div class='form-group'>
         <div class='form-group col-lg-12'>
                    <input type='text' name='id' id='id'  class='form-control input-lg' placeholder='Codigo cupon'><label  id ='mensaje1'>Completar campo</label>
        </div>
        </div>
       
        <div class='row'>
          <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                        <input type='submit' id='validar' class='btn btn-lg btn-success btn-block' value='verificar cupon'>
          </div>
          
        </div>
      
      </div>
    </form>
    </div>";
}

 ?>
 <script type="text/javascript" src="js/cuponventa.js"></script>