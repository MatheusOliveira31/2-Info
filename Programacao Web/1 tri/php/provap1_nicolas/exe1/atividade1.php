<?php
$num = $_POST['num'];
if($num > 0){
    echo "O número digitado é positivo!";
}elseif($num < 0){
    echo "O número digitado é negativo!";
}else{
    echo "O número digitado é igual a 0!";
}