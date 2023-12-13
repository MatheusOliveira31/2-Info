<?php

require_once("ClientePF.php");
require_once("ClientePJ.php");

$pf = new ClientePF("Fulano", "fulano10@gmail.com", "121212121212");
$pf->enviarEmail();
echo"<br>";
$pj = new ClientePJ("ECorp", "ecorp@gmail.com", "132354364689");
$pj->enviarEmail();