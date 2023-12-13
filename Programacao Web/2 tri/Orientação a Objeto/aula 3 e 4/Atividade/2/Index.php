<?php

require_once('Oficina.php');
require_once('Bicicleta.php');
require_once('Automovel.php');

$bicicleta1 = new Bicicleta();
$carro1 = new Automovel();
$oficina = new Oficina();

echo "<h2>Automóvel em manutenção:</h2>";
$oficina->manutencao($carro1);

echo "<h2>Bicicleta em manutenção:</h2>";
$oficina->manutencao($bicicleta1);
