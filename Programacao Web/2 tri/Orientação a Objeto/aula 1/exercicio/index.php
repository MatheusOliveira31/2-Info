<?php

require_once("Pessoa.php");

$pedro = new Pessoa("Pedro", 70);

echo 'Peso inicial - '.$pedro -> getPeso();

$pedro -> emagrecer(5);
echo "<br>";
echo 'Peso perdido - '.$pedro -> getPeso();

$pedro -> engordar(10);
echo "<br>";
echo 'Peso recebido - '.$pedro -> getPeso();
