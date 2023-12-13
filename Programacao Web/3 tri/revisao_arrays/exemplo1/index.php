<?php

//vator vazio

$frutas = []; // ou $frutas = array()
print_r($frutas); // pode ser var_dump($frutas) // echo não exibe conteudo do array
echo "<br>";
echo "<br>";

$frutas[] = "Maçã"; // adicionando um item no vetor /// $frutas = ["Maçã"]; Sobrescreve o vetor de forma errada
print_r($frutas);
echo "<br>";
echo $frutas[0];
echo "<br>";
echo "<br>";

array_push($frutas, "Laranja"); //Tambem adiciona um item no vetor
print_r($frutas);
echo "<br>";
echo $frutas[1];
// echo $frutas[2]; -> da erro pois a chave não existe
echo "<br>";
echo "<br>";

$frutas[0] = "Uva"; // Sobrescreve a Maçã e coloca "Uva"
print_r($frutas);
echo "<br>";
echo "<br>";

unset($frutas[0]); // Apaga um item do vetor, pela sua pocisão
print_r($frutas);
echo "<br>";
print_r(array_values($frutas)); // Retorna um vetor considerando apenas os valores
echo "<br>";
echo "<br>";

$frutas[] = "Abacaxi" ;
$frutas[] = "Morango" ;

//foreach percorre o vetor
foreach($frutas as $fruta) {
    echo $fruta . "<br>";
}