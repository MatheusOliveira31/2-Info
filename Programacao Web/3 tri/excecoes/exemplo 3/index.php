<?php

require_once("MinhaExcecao.php");

try {
    throw new MinhaExcecao("Mensagem da exceção");
    //throw new Exception("Lançando minha exceção genérica");
}/* catch(MinhaExcecao $e) {
    echo $e->obterMensagemDeErroDetalhada();
}*/ catch(Exception $e) {
    echo"Excecão generica: " . $e->getMessage();
}