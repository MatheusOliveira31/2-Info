<?php
$num = $_POST['num'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$med = 0;
$med = ($num + $num1 + $num2 + $num3)/4;
if($med > 7){
    echo "Aprovado com sua nota $med";
}else{
    echo"Reprovado com nota $med";
}