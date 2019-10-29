<?php

include 'conexiones/conexion.php';

$con= new Conexion();
	$query= $con->prepare("select * from productos");

	$query ->execute();
	$resultado= $query->fetchAll();

foreach ($resultado as $res) {
	echo "<div class='col-md-4'>
                <div class='card-content'>
                 <span><a>".$res['fecha']."</a></span>
                    <div class='card-img'>
                        <img src=".$res['imagen'].">
                        <span><a>Ver oferta</a></span>
                       

                    </div>
                   
                </div>
            </div>";
}


	?>