<?php 
		include '../conexiones/conexion.php';
		

	$con= new Conexion();
	$query= $con->prepare("select * from subcategoria");

	$query ->execute();
	$resultado= $query->fetchAll();
 	$listas = '<option value="0">Elige una categoria</option>';
	foreach ($resultado as $res) {
		$listas.="<option value= http://localhost/cuponera/filtro.php?filtrar=".$res['idcategoria'].">".$res['tipo']."</option>";
	}
	echo($listas);

		 ?>

<script type="text/javascript">
  $(document).ready(function(){
      $('#categorias').select2();
  });
</script>