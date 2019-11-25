<?php 
include '../conexiones/conexion.php';
$con= new Conexion();
  $query= $con->prepare("select idproductos,productos.nombre as pro,mail as proveedro,tipo ,precio,cantidad,fecha,imagen from productos,usuario,subcategoria where  idusuario =usuario_idusuario and idcategoria=categoria_idcategoria and estadopro = 1");

  $query ->execute();
  $resultado= $query->fetchAll();

foreach ($resultado as $res) {
	# code...
  echo "<tr>
          <td align='center'>
          <a href='#edit' onclick='editarpro(".$res['idproductos'].");'class='btn btn-default'><em class='fa fa-pencil'></em></a>
          <a  onclick='eliminar(".$res['idproductos'].");' class='btn btn-danger' ><em class='fa fa-trash'></em></a>
            <a  onclick='stock(".$res['idproductos'].");' class='btn btn-default' >stock</a>
                            </td>
                            
                            <td>".$res['pro']."</td>
                            <td>$ ".$res['precio']."</td>
                            <td>".$res['cantidad']."</td>
                            <td>".$res['proveedro']."</td>
                            <td>".$res['tipo']."</td>
                            <td>".$res['fecha']."</td>
                             <td ><img src=".$res['imagen']." style='width:80px;height:70px;'></td>
                             <td class='hidden'>".$res['idproductos']."</td>
                           
         </tr>";
   }

 ?>