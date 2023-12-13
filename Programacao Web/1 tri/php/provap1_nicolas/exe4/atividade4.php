<?php
$vet = array();

for($i = 0;$i < 30; $i++){
    $vet[$i] = rand(1,100);
}
foreach($vet as $item){ 
    if($item % 2 === 0){
        echo "$item é par <br>";
    }
    else{
        echo "$item é impar <br>";
    }
}
