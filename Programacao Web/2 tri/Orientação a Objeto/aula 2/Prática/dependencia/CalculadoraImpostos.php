<?php

class CalculadoraImpostos {

    public function calculadoraIRRF($funcionario) {
        return $funcionario -> getSalario() * 0.1;
    }

    public function calculadoraINSS($funcionario) {
        return $funcionario -> getSalario() * 0.05;
    }

}