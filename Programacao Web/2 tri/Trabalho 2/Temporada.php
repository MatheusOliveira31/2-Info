<?php

class Temporada {

    private $numero;
    private $nota;
    private $episodio;

public function __construct($numero, $nota, $episodio=[]) {
        
    $this -> numero = $numero;
    $this -> nota = $nota;
    $this -> episodio = $episodio;
}

    public function getNumero() {
        return $this -> duracao;
    }

    public function setNumero($numero) {
        $this -> numero = $numero;
    }

    public function getNota() {
        return $this -> nota;
    }

    public function setNota($nota) {
        $this -> nota = $nota;
    }

    public function getEpisodio() {
        return $this -> episodio;
    }

    public function addEpisodio($episodio){
        array_push($this->episodio, $episodio);
    }
}