<?php

//incorporar o composer
require_once __DIR__ . '/vendor/autoload.php';

use Mpdf\Mpdf;
#$mpdf = new \Mpdf\Mpdf();
$css = file_get_contents('style.css');
$html = file_get_contents('doc.html');

$mpdf = new Mpdf();
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html);
$mpdf->Output();