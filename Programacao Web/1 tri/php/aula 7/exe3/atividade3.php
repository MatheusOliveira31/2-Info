<?php
$num = $_POST['num'];
$num1 = $_POST['num1'];
if($num < $num1){
    while($num < $num1){
    echo "$num <br>";
    $num++;
    }
    }elseif($num > $num1){
    while($num > $num1){
    echo "$num <br>";
    $num--;
    }
    }else{
    echo "Os dois números são iguais";
    }
    
    