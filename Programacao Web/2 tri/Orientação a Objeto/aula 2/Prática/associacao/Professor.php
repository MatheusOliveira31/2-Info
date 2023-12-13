<?php

class Professor {

    private $nome;
    private $areaAtuacao;

    public function __construct($nome, $areaAtuacao) {
        $this -> nome = $nome;
        $this -> areaAtuacao = $areaAtuacao;
    }

    public function getNome() {
        return $this -> nome;
    }

    public function setNome() {
        $this -> nome = $nome;
    }

    public function getareaAtuacao() {
        return $this -> areaAtuacao;
    }

    public function setareaAtuacao() {
        $this -> areaAtuacao = $areaAtuacao;
    }
    
}