<?php

require_once("Professor.php");
require_once("Aluno.php");

$prof = new professor("Fulano" , "Geografia");
echo $prof -> getNome();
echo "<br>";

$aluno1 = new Aluno("Ciclano", $prof);
echo $aluno1 -> getNome();
echo "<br>";
//echo $aluno1 -> getProfessor() -> getNome();
$professorDoAluno1 = $aluno1 ->getProfessor();
echo $professorDoAluno1 -> getNome();