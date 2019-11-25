<?php

include '../conexiones/conexion.php';

$con= new Conexion();
   $fechaactual=date("Y-m-d");
	$query= $con->prepare("select * from productos where fecha >= '$fechaactual' and estadopro=1 LIMIT 6");

	$query ->execute();
	$resultado= $query->fetchAll();

foreach ($resultado as $res) {
	echo "<div class='col-md-4'>
                <div class='card-content'>
                 <span><a>".$res['fecha']."</a></span>
                    <div class='card-img'>
                        <img src=".$res['imagen'].">
                        <span><a href=http://localhost/cuponera/decripcion.php?id=".$res['idproductos'].">Ver oferta</a></span>
                       

                    </div>
                   
                </div>
            </div>";
}



	?>