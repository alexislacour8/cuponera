<?php 
$ano=2019;
$mes=10;
$dia=29;

$fechaexpiracion=strtotime($ano."/".$mes."/".$dia);

$fechaactual=strtotime(date("Y-m-d"));

if ($fechaexpiracion >= $fechaactual) {
	echo "no ha vencido el cupon";
	# code...
}

else{
	echo "se vencio el cupon";
}



    
   



 ?>