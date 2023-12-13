<?php

require_once("Funcionario.php");
require_once("FuncionarioAutenticavel.php");

class Gerente extends Funcionario implements FuncionarioAutenticavel{

    public function login(){
        return true;
    }
}