<?php

    require_once('Funcionario.php');
    require_once('Socio.php');
    require_once('Empresa.php');

    echo "<h3>Teste - Funcionario</h3>";
    $funcionario = new Funcionario("Pedro");
    $funcionario->setNome("Claudinho");
    echo "<p>Nome do 1° funcionário: ".$funcionario->getNome()."</p>";
    echo "<p>Trabalhar...</p>";
    $funcionario->trabalhar();

    echo "<h3>Teste - Empresa</h3>";
    $empresa1 = new Empresa("XCorp LTDA0983");
    $empresa1->setRazao("XCorp LTDA");
    echo "<p>Razão social da 1°a empresa: ".$empresa1->getRazao()."</p>";
    echo "<p>Obter lucros...</p>";
    echo $empresa1->obterLucros();

    echo "<h3>Teste - Sócio</h3>";
    $socio1 = new Socio("Airtom");
    $socio1->setNome("Adriano");
    echo "<p>Nome do 1° sócio: ".$socio1->getNome()."</p>";
    echo "<p>Trabalhar...</p>";
    $socio1->trabalhar();
    echo "<p>Obter lucros...</p>";
    echo $socio1->obterLucros();