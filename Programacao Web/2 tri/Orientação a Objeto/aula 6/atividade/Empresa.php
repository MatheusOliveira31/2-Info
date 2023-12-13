<?php
require_once('Proprietario.php');

Class Empresa implements Proprietario {

protected $razaoSocial;

    public function __construct($razao) {

        $this -> razao = $razao;
    }

    public function setRazao($razao) {
        $this -> razao = $razao;
    }
        
    public function getRazao() {
        return $this -> razao;
    }
    public function obterLucros() {
        echo $this -> razaoSocial. " LTDA está obtendo lucros " ;
    }
}
