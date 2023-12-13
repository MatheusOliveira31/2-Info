<?php

require_once('Veiculo.php');

class Bicicleta extends Veiculo
{

    public function ajustar()
    {
        echo "Ajustando...<br>";
    }

    public function limpar()
    {
        echo "Limpando...<br>";
    }
}
