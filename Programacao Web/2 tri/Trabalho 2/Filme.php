<?php

require_once('Obra.php');
require_once('Midia.php');

final class Filme extends Obra implements Midia{

    private $duracao;
    private $nota;

    public function __construct($nome, $personagens=[], $duracao, $nota) {
        
        $this -> nome = $nome;
        $this -> personagem = $personagem;
        $this -> duracao = $duracao;
        $this -> nota = $nota;
    }

    public function getDuracao() {
        return $this -> duracao;
    }

    public function setIdade($duracao) {
        $this -> duracao = $duracao;
    }

    public function setNota($nota) {
        $this -> nota = $nota;
    }

    public function obterNota(){
        return $this -> nota;
    }

}