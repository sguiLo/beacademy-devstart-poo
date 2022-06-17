<?php


include 'vendor/autoload.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '';

for ($n = 0; $n < 10; $n++){
    $html .= 'ó o pente! <br>';
}

$dompdf->loadHtml('hello world' .$html);

$dompdf->render();

$dompdf->stream();