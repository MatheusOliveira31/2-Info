<?php
$frase = $_POST['frase'];
$let = $_POST['let'];
echo substr_count($frase, $let);