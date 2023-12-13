<?php

class MinhaExcecao extends Exception {

    public function obterMensagemDeErro() {
        return "Minha exceção foi lançada " 
        . $this->getMessage();
    }

    public function obterMensagemDeErroDetalhada() {
        return "Minha exceção foi lançada no arquivo"
    .$this->getFile()
    . ", na linha "
    .$this->getLine()
    .". A mensagem foi: "
    .$this->getMessage();
   }
}