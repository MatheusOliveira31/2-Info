<?php
require_once ('Pessoa.php');
require_once ('Proprietario.php');
require_once ('Colaborador.php');

class Socio extends Pessoa implements Proprietario, Colaborador {

    public function obterLucros(){
        echo $this -> nome. " está obtendo lucros";
    }
    public function trabalhar(){
        
        echo $this -> nome. " está trabalhando ";
    }
}