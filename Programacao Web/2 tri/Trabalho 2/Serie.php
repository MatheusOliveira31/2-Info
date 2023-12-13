<?php

require_once('Obra.php');

final class Serie extends Obra {

    private $temporadas;

    public function __construct($nome, $personagens=[], $temporadas=[]) {

       parents:: __construct($nome, $personagens);
        $this -> temporada = $temporada;
    }

    public function getTemporada() {
        return $this -> temporada;
    }

    public function addTemporada($temporada){
        array_push($this->temporada, $temporada);
    }
    public function obterNota(){
        
    }
}