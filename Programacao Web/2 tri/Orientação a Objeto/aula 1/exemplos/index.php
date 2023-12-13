<?php

require_once("Pessoa.php");

$pessoa1 = new Pessoa("Eduardo" , 23);
$pessoa1 -> setNome("Eduardo Schenato");

$pessoa2 = new Pessoa("Fulano" , 18);

echo $pessoa1->getNome();

$pessoa1->fazerAniversario();

echo "<br>";
echo $pessoa1->getIdade();
echo "<br>";
echo $pessoa2->getIdade();