<?php
$vala = $_POST['vala'];
$valb = $_POST['valb'];
$valc = $_POST['valc'];
$vald = $_POST['vald'];

$soma = $vala + $valc;
$multiplicação = $valb * $vald;

if($soma > $multiplicação){
    echo 'a+c é maior que b*d';
}elseif($soma < $multiplicação){
    echo 'a+c é menor que b*d';
}
else{
    echo 'a+c e b*d tem valores iguais';
}


