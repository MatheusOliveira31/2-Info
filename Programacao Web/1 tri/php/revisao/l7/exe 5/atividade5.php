<?php
$vetor = array(36, 6, 7, 9, 87, 21, 32, 31, 33, 44, 55, 66, 77, 98, 12, 123, 229, 17, 75, 22);
$maior = $vetor[0]; // Pega o primeiro número do vetor original
$menor = $vetor[0]; // Pega o primeiro número do vetor original

$total = 0;
$somatorio = 0;
foreach ($vetor as $item) {
    if ($item > $maior) $maior = $item;
    elseif ($item < $menor) $menor = $item;
    //Verifica o total de itens do vetor
    $total ++;
    //Soma todos os itens
    $somatorio += $item;
}
//Média todos os elementos de um array em PHP
$media = $somatorio / $total;

echo "O maior elemento desse vetor é: $maior<br>";
echo "O menor elemento desse vetor é: $menor<br>";
echo "A média dos elementos do vetor é: $media";