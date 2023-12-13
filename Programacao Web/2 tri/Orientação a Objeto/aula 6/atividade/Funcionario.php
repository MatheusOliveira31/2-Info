<?php

require_once("Pessoa.php");
require_once("Colaborador.php");

Class Funcionario extends Pessoa implements Colaborador{

public function trabalhar() {
    
    echo $this -> nome. " está trabalhando ";
}
}