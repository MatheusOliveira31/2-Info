<?php
$string1 = $_POST["string1"];
$string2 = $_POST["string2"];
$tamanho_str1 = strlen($string1);
$tamanho_str2 = strlen($string2);
$result = $tamanho_str1 - $tamanho_str2;
if($result < 0)echo "a $string1 é menor que a $string2";
if($result > 0)echo "a $string1 é maior que a $string2";
if($result == 0)echo "IGUAL";

