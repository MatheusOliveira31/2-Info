<?php

require_once("Funcionario.php");
require_once("CalculadoraImpostos.php");

$funcionario = new Funcionario("João", 2000);
echo $funcionario -> getNome();
echo "<br>";

$calculadora = new CalculadoraImpostos();
echo $calculadora -> calculadoraIRRF($funcionario);
echo("<br>");
echo $calculadora -> calculadoraINSS($funcionario);