<?php

require_once(Pessoa.php);

$p1 = new Pessoa("João", 8);
$p2 = new Pessoa("Maria", 16);

//Pessosa é um vetor de objetos de classe Pessoas

$pessoas = [$p1, $p2];
array_push($pessoas, new Pessoa("Pedro", 23));
print_r($pessoa);

foreach($pessoas as $pessoa) {
    echo $pessoa->getNome() . "<br>";
}