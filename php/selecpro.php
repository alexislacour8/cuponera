<?php 
		include '../conexiones/conexion.php';
		

	$con= new Conexion();
	$query= $con->prepare("select * from usuario where tipousuario = 3");

	$query ->execute();
	$resultado= $query->fetchAll();
 	$listas = '<option value="0">Elige proveedor</option>';
	foreach ($resultado as $res) {
		$listas.="<option value=".$res['idusuario'].">".$res['mail']."</option>";
	}
	echo($listas);

		 ?>
<script type="text/javascript">
  $(document).ready(function(){
      $('#proveedor').select2();
  });
</script>
