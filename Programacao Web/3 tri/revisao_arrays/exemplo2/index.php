<?php

//Inicializo o vetor com valores
$primos = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
print_r($primos);
echo "<br>";
echo $primos[0];
echo "<br>";
echo "<br>";

foreach($primos as $primo) {
    echo $primo . "<br>";
}
echo "<br>";
echo "<br>";

foreach($primos as $primo) {
    if($primo >= 10 &&  $primo <= 20) { /* && ou and */
        echo $primo . "<br>";
    }
}
echo "<br>";
echo "<br>";