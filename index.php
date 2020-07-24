<?php


require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML(file_get_contents("faktura.html"));
$mpdf->Output();

?>