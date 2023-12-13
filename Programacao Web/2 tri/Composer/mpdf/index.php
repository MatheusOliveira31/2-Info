<?php

require_once("vendor/autoload.php");

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML("<h1>Olá Mundo</h1>");

$mpdf->Output();