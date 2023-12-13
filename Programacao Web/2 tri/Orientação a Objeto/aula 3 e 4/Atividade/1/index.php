<?php

require_once("Bombom.php");
require_once("Pirulito.php");

$bombom = new Bombom("Meio Amargo", "Creme");
echo "Bombons: ";
echo "<br>";
echo $bombom -> getSabor();
echo "<br>";
echo $bombom -> getRecheio();

$pirulito = new Pirulito("7 belo");
echo "<br>";
echo "<br>";
echo "Pirulito: ";
echo "<br>";
echo $pirulito -> getSabor();