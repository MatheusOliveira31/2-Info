<?php

require_once('Veiculo.php');

class Oficina
{

    public function manutencao($veiculo)
    {

        $veiculo->ajustar();
        $veiculo->limpar();

        if ($veiculo instanceof Automovel) {
            $veiculo->trocarOleo();
        }
    }
}
