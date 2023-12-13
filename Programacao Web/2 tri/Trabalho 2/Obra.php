<?php

abstract class Obra {

    protected $nome;
    protected $personagens;

    public function __construct($nome, $personagens=[]) {
        
        $this -> nome = $nome;
        $this -> personagens = $personagens;
    }

    public function setNome($nome) {
        $this -> nome = $nome;
    }

    public function getNome() {
        return $this -> nome;
    }
    
    public function getPersonagens() {
        return $this -> personagens;
    }

    public function addPersonagens($personagens){
       array_push($this->personagens, $personagens);
    }

    public function obterProtagonistas() {
        foreach ($this->personagens as $personagem) {
            if ($personagem->isProtagonista()) {
                $protagonistas[] = $personagem;
            }
        }
        return $protagonistas;
    }

    abstract function obterNota();
    
}