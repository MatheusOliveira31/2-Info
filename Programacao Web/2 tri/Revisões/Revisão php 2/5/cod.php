<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

if ($num1 == $num2 && $num2 == $num3) {
    echo "triangulo equilatero";
} else if (($num1 != $num2 && $num2 != $num3)) {
    echo "triangulo escalelo";
} else {
    echo "triangulo isósceles";
}
//($num1 = $num2 != $num3 || $num1 != $num2 = $num3 || $num1 = $num3 != $num2)