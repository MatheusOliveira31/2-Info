<?php

require_once("Gerente.php");
require_once("Estagiario.php");

$gerente = new Gerente("Fulano");
var_dump($gerente->login());