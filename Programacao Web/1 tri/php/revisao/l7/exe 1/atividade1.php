<?php
$num = $_POST['numero'];
if($num >0){
    echo " $num é positivo";
}else if($num < 0){
    echo " $num é negativo";
}else{
    echo " $num é neutro";
}