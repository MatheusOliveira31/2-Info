<?php

require_once("ClientePF.php");
require_once("ClientePJ.php");

$fulano = new ClientePF("Fulano", "fulano@gmail.com", "12345678");
echo $fulano->getCpf();
echo "<br>";
echo $fulano->getNome();

$empresa = new ClientePJ("XYZ Corp", "xyz@corp.com", "455465465445");
echo $empresa->getCnpj();
echo "<br>";
$empresa->setEmail("xyzcorp@gmail.com"); //trocou o valor do email
echo $empresa->getEmail();