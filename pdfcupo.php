<?php
require "vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;
ob_start();
require "cupondia.php";
$cupos = ob_get_clean();
$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($cupos);
$html2pdf->output('cupondia.pdf');
?>