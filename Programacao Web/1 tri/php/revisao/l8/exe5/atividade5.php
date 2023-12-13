<?php
$vet = array(3, 4, 6, 73, 9, 1, 73, 11, 22, 13, 49, 58, 56, 14, 68);
foreach($vet as $item){
    if($item % 2 == 0){
        echo "$item é par, <br>";
    }
    else{
        echo "$item é impar, <br>";
    }
}