<?php
$num = $_POST['num'];


if($num % 10 === 0 && $num % 5 === 0 && $num % 2 === 0){
    echo "divisivel por 10, 5 e por 2 <br>";
}
    elseif($num % 5 === 0 && $num % 2 === 0 ){
        echo "divisivel por 5 e por 2 <br>";
    }
        elseif($num % 10 === 0){
            echo "divisivel por 10 <br>";
        }
else{
    echo "não é divisel por 10, 5 e por 2";
}