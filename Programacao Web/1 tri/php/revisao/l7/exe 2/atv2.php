<?php
$altura;
$peso;
$altura = $_POST["altura"];
$sexo = $_POST["sexo"];
$ideal;


if($sexo == "M"){
    $imc = 72.7;
        $ideal = round($imc * $altura)-58.2;
        echo "seu imc é $ideal ";
   
}
else if($sexo == "F"){
    $imc = 62.1;
        $ideal = round($imc * $altura)- 44.7;
        echo "seu imc é $ideal";
   
}



