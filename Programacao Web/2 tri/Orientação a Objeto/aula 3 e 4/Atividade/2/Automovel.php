<?php
require_once('Veiculo.php');

class Automovel extends Veiculo
{

    public function ajustar()
    {
        echo "Ajustando...<br>";
    }

    public function limpar()
    {
        echo "Limpando...<br>";
    }

    public function trocarOleo()
    {
        echo "Trocando Óleo...<br>";
    }
}
