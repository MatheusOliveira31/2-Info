<?php
require_once("TV.php");
require_once("SmartTV.php");
require_once("SistemaOperacional.php");



$TV = new TV("Toshiba", "36");
echo $TV -> getMarca();
echo "<br>";
echo $TV -> getPolegadas();
echo "<br>";
if( $TV -> isLigada() == false){
    $TV -> ligar();
}
echo "<br>";
echo $TV -> getCanal();
echo "<br>";
echo $TV -> getVolume();
echo "<br>";
echo $TV -> ligar();
echo "<br>";
echo $TV -> desligar();
echo "<br>";
echo $TV -> aumentarVolume();
echo "<br>";
echo $TV -> diminuirVolume();
echo "<br>";
echo $TV -> trocarCanal(11);
echo "<br>";

$SistemaOperacional = new SistemaOperacional("Nícolas");
echo $SistemaOperacional -> getNome();
