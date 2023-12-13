<?php

//criando vetor bidimensional com chaves textuais
$jogos = [
    "Dark Souls " => ["Artorias", "Gwyn", "Manus"],
    "Dark Souls 3" => ["Gael", "Soul of Cinder", "Nameless King"],
    "Sekiro" => ["Genishiro", "Corrupted Monk", "Isshin"],
];

//Adicionando um item pela sua chave textual
//obs: não é possivel adicionar assim com array_push
$jogos["Bloodborne"] = ["Gherman", "Amygdala" , "Ludwig"];

/*
echo "<pre>";
print_r($jogos);
echo "<br>";
*/

foreach($jogos as $jogo => $bosses) {
    print_r($bosses);
    echo "<br>";
}

echo "<br>";
echo "<br>";

foreach($jogos as $jogo => $bosses) {
    echo "<h1>" . $jogo . "<h1>";
    // ou echo "<h1>$time</h1>;"
    echo "<ul>";
    foreach($bosses as $boss) {
        echo "<li>" . $boss . "</li>";
    }
    echo "</ul>";
}
