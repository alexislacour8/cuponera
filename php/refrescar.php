<?php 
include '../conexiones/conexion.php';
    $nume=$_POST["id"];
	$con= new Conexion();
	$query= $con->prepare("SELECT idcuponventa,nombre,canti,imagen,monto,codgio,codigoventa FROM productos,cuponventa WHERE usuario_idusuario ='$nume' and idproductos = productos_idproductos and estadoven=1");

	$query ->execute();
	$resultado= $query->fetchAll();

   
if ($resultado) {
  # code...
                foreach ($resultado as $res ) {

    echo "  <tr>
                            <td align='center'>
                              <a class='btn btn-default' onclick='validaventa(".$res['idcuponventa'].");'><em class='fa fa-pencil'></em>validar venta</a>
                              
                            </td>
                         
                            <td>".$res['nombre']."</td>
                            <td>".$res['canti']."</td>
                            <td>$".$res['monto']."</td>
                            <td>".$res['codgio']."</td>
                            <td hidden>".$res['codigoventa']."</td>

                          
                          </tr>";
    # code...
                         }
  
   }
    else{
      echo "<br><br><br><center><h2 style='margin-top: 90px;'>No tienes ventas para validar</h2></center>";
    }
   





 ?>